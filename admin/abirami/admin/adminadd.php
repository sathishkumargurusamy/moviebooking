<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
   
}           include 'header.php';
            ?>
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon"><i class="pe-7s-note2"></i></div>
                        <div class="header-title">
                            <h1>Add Movie</h1>
                            
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i>Home</a></li>
                                <li class="active">Add Movie</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-10 col-md-10">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Add Movie</h4>
                                    </div>
                                </div>
                                <form action="add_movie.php" method="post">
                                    <div class="panel-body">
                                       
                                        <label>Name</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon" id="sizing-addon1">MOVIE</span>
                                            <input type="text" class="form-control"  aria-describedby="sizing-addon1" name="mname">
                                        </div>
                                        
                                        </div>
                                        <div class="panel-body" >
                                        <label>Number of shows</label>
                                        <div class="form-group row" >
                                            
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <select class="form-control basic-multiple" multiple="multiple" name="shows[]">
                                                <optgroup label="Special show">
                                                        <option value="6 AM">6 AM</option>
                                                       
                                                    </optgroup>
                                                    <optgroup label="Morning Show">
                                                        <option value="10 AM">10 AM</option>
                                                       
                                                    </optgroup>
                                                    <optgroup label="Matinee Show">
                                                        <option value="1:50 PM">1:50 PM</option>
                                                        
                                                    </optgroup>
                                                    <optgroup label="Evening Show/Night Show">
                                                    <option value="6 PM">6 PM</option>
                                                        <option value="9:50 PM">9:50 PM</option>
                                                    </optgroup>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="panel-body">
                                        <label>Select Layout</label>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                                
                                        <div >
                                                <input 
                                                type="radio" 
                                                id="sad" class="input-hidden" name="layout" value="layout1" />
                                              <label for="sad">
                                                <img 
                                                  src="assets/socicon/seat1.png" 
                                                  alt="I'm sad" />
                                              </label>
                                              
                                              <input 
                                                type="radio" 
                                                id="happy" class="input-hidden"  name="layout" value="layout2" />
                                              <label for="happy">
                                                <img 
                                                  src="assets/socicon/seat2.png" 
                                                  alt="I'm happy" />
                                              </label>
                                              <input 
                                                type="radio" 
                                                id="happy1" class="input-hidden"  name="layout" value="layout3" />
                                              <label for="happy1">
                                                <img 
                                                  src="assets/socicon/seat3.png" 
                                                   />
                                              </label>
                                              
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-4 col-sm-offset-3">
                                            <input type="submit" class="btn btn-primary w-md m-b-5"  name="btnsubmit" value="Submit"/>
                                                
                                                <button type="button" class="btn btn-default w-md m-b-5">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->   
    </body>
</html>