﻿<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Category</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Category
                        </div>
						<form method="post" enctype="multipart/form-data">
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>Category Name</label>
								<input class="form-control" type="text" name="cat_name"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Category Image</label>
								<input class="form-control" type="file" name="file" />
							
							</div>
							
							<hr />
						
							 <div class="form-group">
								
								<input type="submit" class="btn btn-primary" type="text" name="submit" value="ADD"/>
								
							</div>
						</div>
					</div>
			   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 
 ?> 