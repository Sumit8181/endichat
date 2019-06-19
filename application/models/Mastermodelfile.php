<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mastermodelfile extends CI_Model {

	function __construct() {

        $this->load->database() ;

    }


    
    /* Row Count */

    function TotalRowCountInATable($tablename)

    {
    	$row_count = $this->db->count_all_results($tablename);

    	return $row_count ;
    }


    function TotalRowCountWhereCase($tablename, $id, $fieldname)
    {
        $query = $this->db->get_where($tablename, array($fieldname => $id));

        return $query->num_rows() ;
    }


    function TotalRowCountWhereCaseMoreThanOne($tablename, $wherecase)
    {
        $query = $this->db->get_where($tablename, $wherecase);

        return $query->num_rows() ;
    }

    /* Row Count */ 








    /* Selecting Stuff Data */ 

    function SelectDataAllObjectFormat($tablename)

    {    	   	
    	$query = $this->db->get($tablename) ;

    	return $query->result() ;
    }


    function SelectDataAllArrayFormat($tablename)

    {
    	$query = $this->db->get($tablename) ;

    	return $query->result_array() ;
    }


    function SelectDataByLimitObjectFormat($tablename, $startid, $howmanyrow)

    {

    	$query = $this->db->get($tablename, $howmanyrow, $startid) ;

    	return $query->result() ;

    }



    function SelectDataByLimitArrayFormat($tablename, $startid, $howmanyrow)

    {
    	$query = $this->db->get($tablename, $howmanyrow, $startid) ;

    	return $query->result_array() ;

    }



    function SelectDataByWhereObjectFormat($tablename, $id, $fieldname)

    {

    	$query = $this->db->get_where($tablename, array($fieldname => $id));

		return $query->result() ;    	

    }



    function SelectDataByWhereArrayFormat($tablename, $id, $fieldname)

    {

    	$query = $this->db->get_where($tablename, array($fieldname => $id));

		return $query->result_array() ;    	

    }



    function SelectDataByWhereObjectFormat_MoreThanOneWhereClause($tablename, $whereclausearray)

    {

        $query = $this->db->get_where($tablename, $whereclausearray);

        return $query->result() ;       

    }




    function SelectDataByWhereArrayFormat_MoreThanOneWhereClause($tablename, $whereclausearray)

    {

        $query = $this->db->get_where($tablename, $whereclausearray);

        return $query->result_array() ;     

    }





    function SelectDataByWhereLimitObjectFormat($tablename, $id, $fieldname, $limit, $offset)

    {

    	$query = $this->db->get_where($tablename, array($fieldname => $id), $limit, $offset);

		return $query->result() ;    	

    }



    function SelectDataByWhereLimitArrayFormat($tablename, $id, $fieldname, $limit, $offset)

    {

    	$query = $this->db->get_where($tablename, array($fieldname => $id), $limit, $offset);

		return $query->result_array() ;    	

    }


    function SelectDataByWhereArrayFormat_Custom_For_Ajax_City_Return($tablename, $id, $fieldname, $groupbyclause)
    {
        /* use this later on */
        $sql_query = "SELECT * FROM " . $tablename . " WHERE " . $fieldname . " = '" . $id . "' GROUP BY " . $groupbyclause ;

        $query = $this->db->query($sql_query) ;
        return $query->result_array() ;
    }


    /* Selecting Stuff Data */ 



    /* Inserting Stuff Data */ 



    function InsertRowIntoDatabase($data, $tablename)

    {

    	$this->db->insert($tablename, $data); 

    	$insert_id = $this->db->insert_id();

        return  $insert_id;

    }



    /* Inserting Stuff Data */ 




    /* Updating Stuff Data */ 



    function UpdateRowIntoDatabase($id, $tablename, $data, $fieldname)
    {
    	$this->db->where($fieldname, $id);

		$updateID = $this->db->update($tablename, $data);

		return $updateID ;
    }


    function UpdateRowIntoDatabase_TwoWhereClause($id1, $id2, $tablename, $data, $fieldname1, $fieldname2)
    {
        $updateID = $this->db->update($tablename, $data, array($fieldname1 => $id1, $fieldname2 => $id2));

        return $updateID ;
    }


    function UpdateRowIntoDatabase_ThreeWhereClause($id1, $id2, $id3, $tablename, $data, $fieldname1, $fieldname2, $fieldname3)
    {
        $updateID = $this->db->update($tablename, $data, array($fieldname1 => $id1, $fieldname2 => $id2, $fieldname3 => $id3));

        return $updateID ;
    }


    /* Updating Stuff Data */ 



    /* Deleting Stuff Data */ 



    function DeleteRowFromDatabase($id, $tablename, $fieldname)

    {

    	$deleteID = $this->db->delete($tablename, array($fieldname => $id)); 



    	return $deleteID ;

    }

    /* Deleting Stuff Data */ 





/* Join Query - Joining between 2 tables */

    function SelectDataInnerJoinObjectFormat($table1, $table2, $table1_id_field, $table2_id_field, $short_table1, $short_field1, $short_term, $start, $howmanyrow)

    {
        $query_string = "SELECT * FROM " ;
        if(isset($table1))
        {
            $query_string .= $table1 ; 
        }
        $query_string .= " JOIN " ;
        if(isset($table2))
        {
            $query_string .= $table2 ; 
        }
        $query_string .= " ON " ;
        if(isset($table1_id_field) && isset($table1))
        {
            $query_string .= $table1 . "." . $table1_id_field ;
        }
        $query_string .= " = " ;
        if(isset($table2_id_field) && isset($table2))
        {
            $query_string .= $table2 . "." . $table2_id_field ;
        }
        if($short_table1 != "" && $short_field1 != "") 
        {
             $query_string .= " ORDER BY " . $short_table1 . "." . $short_field1 ;
        }
        if($short_term != "")
        {
            $query_string .= " " . $short_term ;
        }
        if($start != "" && $howmanyrow != "")
        {
            $query_string .= " LIMIT " . $start . "," . $howmanyrow ;
        }

        $query = $this->db->query($query_string) ;
        return $query->result() ;
    }



    function SelectDataInnerJoinArrayFormat($table1, $table2, $table1_id_field, $table2_id_field, $short_table1, $short_field1, $short_term, $start, $howmanyrow)

    {    

        $query_string = "SELECT * FROM " ;
        if(isset($table1))
        {
            $query_string .= $table1 ; 
        }
        $query_string .= " JOIN " ;
        if(isset($table2))
        {
            $query_string .= $table2 ; 
        }
        $query_string .= " ON " ;
        if(isset($table1_id_field) && isset($table1))
        {
            $query_string .= $table1 . "." . $table1_id_field ;
        }
        $query_string .= " = " ;
        if(isset($table2_id_field) && isset($table2))
        {
            $query_string .= $table2 . "." . $table2_id_field ;
        }
        if($short_table1 != "" && $short_field1 != "") 
        {
             $query_string .= " ORDER BY " . $short_table1 . "." . $short_field1 ;
        }
        if($short_term != "")
        {
            $query_string .= " " . $short_term ;
        }
        if($start != 0)
        {
            $query_string .= " LIMIT " . $start . "," . $howmanyrow ;
        } else {
            $query_string .= " LIMIT 0," . $howmanyrow ;
        }

        $query = $this->db->query($query_string) ;
        return $query->result_array() ;
    	
    }



    function SelectDataLeftJoinObjectFormat($table1, $table2, $table1_id_field, $table2_id_field, $short_table1, $short_field1, $short_term, $start, $howmanyrow)

    {
        $query_string = "SELECT * FROM " ;
        if(isset($table1))
        {
            $query_string .= $table1 ; 
        }
        $query_string .= " LEFT JOIN " ;
        if(isset($table2))
        {
            $query_string .= $table2 ; 
        }
        $query_string .= " ON " ;
        if(isset($table1_id_field) && isset($table1))
        {
            $query_string .= $table1 . "." . $table1_id_field ;
        }
        $query_string .= " = " ;
        if(isset($table2_id_field) && isset($table2))
        {
            $query_string .= $table2 . "." . $table2_id_field ;
        }
        if($short_table1 != "" && $short_field1 != "") 
        {
             $query_string .= " ORDER BY " . $short_table1 . "." . $short_field1 ;
        }
        if($short_term != "")
        {
            $query_string .= " " . $short_term ;
        }
        if($start != "" && $howmanyrow != "")
        {
            $query_string .= " LIMIT " . $start . "," . $howmanyrow ;
        }

        $query = $this->db->query($query_string) ;
        return $query->result() ;
    }



    function SelectDataLeftJoinArrayFormat($table1, $table2, $table1_id_field, $table2_id_field, $short_table1, $short_field1, $short_term, $start, $howmanyrow)

    {

        $query_string = "SELECT * FROM " ;
        if(isset($table1))
        {
            $query_string .= $table1 ; 
        }
        $query_string .= " LEFT JOIN " ;
        if(isset($table2))
        {
            $query_string .= $table2 ; 
        }
        $query_string .= " ON " ;
        if(isset($table1_id_field) && isset($table1))
        {
            $query_string .= $table1 . "." . $table1_id_field ;
        }
        $query_string .= " = " ;
        if(isset($table2_id_field) && isset($table2))
        {
            $query_string .= $table2 . "." . $table2_id_field ;
        }
        if($short_table1 != "" && $short_field1 != "") 
        {
             $query_string .= " ORDER BY " . $short_table1 . "." . $short_field1 ;
        }
        if($short_term != "")
        {
            $query_string .= " " . $short_term ;
        }
        if($start != "" && $howmanyrow != "")
        {
            $query_string .= " LIMIT " . $start . "," . $howmanyrow ;
        } 
        if($start == 0 && $howmanyrow != "")
        {
            $query_string .= " LIMIT 0," . $howmanyrow ;
        }

        $query = $this->db->query($query_string) ;
        return $query->result_array() ;
    }



    function SelectDataRightJoinObjectFormat($table1, $table2, $table1_id_field, $table2_id_field, $short_table1, $short_field1, $short_term, $start, $howmanyrow)

    {
        $query_string = "SELECT * FROM " ;
        if(isset($table1))
        {
            $query_string .= $table1 ; 
        }
        $query_string .= " RIGHT JOIN " ;
        if(isset($table2))
        {
            $query_string .= $table2 ; 
        }
        $query_string .= " ON " ;
        if(isset($table1_id_field) && isset($table1))
        {
            $query_string .= $table1 . "." . $table1_id_field ;
        }
        $query_string .= " = " ;
        if(isset($table2_id_field) && isset($table2))
        {
            $query_string .= $table2 . "." . $table2_id_field ;
        }
        if($short_table1 != "" && $short_field1 != "") 
        {
             $query_string .= " ORDER BY " . $short_table1 . "." . $short_field1 ;
        }
        if($short_term != "")
        {
            $query_string .= " " . $short_term ;
        }
        if($start != "" && $howmanyrow != "")
        {
            $query_string .= " LIMIT " . $start . "," . $howmanyrow ;
        }

        $query = $this->db->query($query_string) ;
        return $query->result() ;
    }



    function SelectDataRightJoinArrayFormat($table1, $table2, $table1_id_field, $table2_id_field, $short_table1, $short_field1, $short_term, $start, $howmanyrow)

    {
        $query_string = "SELECT * FROM " ;
        if(isset($table1))
        {
            $query_string .= $table1 ; 
        }
        $query_string .= " RIGHT JOIN " ;
        if(isset($table2))
        {
            $query_string .= $table2 ; 
        }
        $query_string .= " ON " ;
        if(isset($table1_id_field) && isset($table1))
        {
            $query_string .= $table1 . "." . $table1_id_field ;
        }
        $query_string .= " = " ;
        if(isset($table2_id_field) && isset($table2))
        {
            $query_string .= $table2 . "." . $table2_id_field ;
        }
        if($short_table1 != "" && $short_field1 != "") 
        {
             $query_string .= " ORDER BY " . $short_table1 . "." . $short_field1 ;
        }
        if($short_term != "")
        {
            $query_string .= " " . $short_term ;
        }
        if($start != "" && $howmanyrow != "")
        {
            $query_string .= " LIMIT " . $start . "," . $howmanyrow ;
        }

        $query = $this->db->query($query_string) ;
        return $query->result_array() ;
    }

    /* Join Query - Joining between 2 tables */




    /* Select Data Where Case */

    function SelectDataWhereCaseObjectFormatOneWhere($table, $field_name, $field_value)

    {

    	$this->db->select('*');

		$this->db->from($table);

		$query = $this->db->where($field_name, $field_value) ;

		return $query->result() ;  

    }



    function SelectDataWhereCaseArrayFormatOneWhere($table, $field_name, $field_value)

    {

    	$this->db->select('*');

		$this->db->from($table);

		$query = $this->db->where($field_name, $field_value) ;

		return $query->result_array() ;  

    }



    function SelectDataWhereCaseObjectFormatTwoWhere($table, $field_name1, $field_value1, $field_name2, $field_value2)

    {

    	$this->db->select('*');

		$this->db->from($table);

		$this->db->where($field_name1, $field_value1) ;

		$query = $this->db->where($field_name2, $field_value2) ;

		return $query->result() ;  

    }



    function SelectDataWhereCaseArrayFormatTwoWhere($table, $field_name1, $field_value1, $field_name2, $field_value2)

    {

    	$this->db->select('*');

		$this->db->from($table);

		$this->db->where($field_name1, $field_value1) ;

		$query = $this->db->where($field_name2, $field_value2) ;

		return $query->result_array() ;  

    }



    function SelectDataWhereCaseObjectFormatThreeWhere($table, $field_name1, $field_value1, $field_name2, $field_value2, $field_name3, $field_value3)

    {

    	$this->db->select('*');

		$this->db->from($table);

		$this->db->where($field_name1, $field_value1) ;

		$this->db->where($field_name2, $field_value2) ;

		$query = $this->db->where($field_name3, $field_value3) ;

		return $query->result() ;  

    }



    function SelectDataWhereCaseArrayFormatThreeWhere($table, $field_name1, $field_value1, $field_name2, $field_value2, $field_name3, $field_value3)

    {

    	$this->db->select('*');

		$this->db->from($table);

		$this->db->where($field_name1, $field_value1) ;

		$this->db->where($field_name2, $field_value2) ;

		$query = $this->db->where($field_name3, $field_value3) ;

		return $query->result_array() ;  

    }



    function SelectDataWhereCaseObjectFormatCustomWhereCase($table, $whereString)

    {

    	$this->db->select('*');

    	$this->db->from($table);

    	$query = $this->db->where($whereString);

    	return $query->result() ;

    }



    function SelectDataWhereCaseArrayFormatCustomWhereCase($table, $whereString)

    {

    	$this->db->select('*');

    	$this->db->from($table);

    	$query = $this->db->where($whereString);

    	return $query->result_array() ;

    }



    /* Select Data Where Case */




}