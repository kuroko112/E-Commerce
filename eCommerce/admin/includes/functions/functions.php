<?php  

	/*
	**	Title Function That Print The Page Title In Case The Page 
	**	Has The Variable $pagetitle And print Defult title For Other Pages  
	*/

	Function getTitle(){
		
		global $pageTitle;


		if (isset($pageTitle)){

			echo $pageTitle;
		} else {

			echo 'Defult';

		}


	}