<?php include('templates/_header.php'); ?>
        

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-4 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-user fa-2x"></i>
                                            <h5 class="text-muted vb">Users</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-danger">23</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <!-- <span class="sr-only">100% Complete (success)</span> --> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 row-in-br  b-r-none">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                            <h5 class="text-muted vb">Batch Progress</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-megna">40</h3> 
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">Total Batches</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-primary">45</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <!-- <span class="sr-only">70% Complete (success)</span> --> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
                

                               <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Batches Overview</h3> 
                            <div class="table-responsive">
                                <table class="table product-overview">
                                    <thead>
                                        <tr>
                                            <th>Batch ID</th>
                                            <th>Farm Inspactor</th>
                                            <th>Harvester</th>
                                            <th>Exporter</th>
                                            <th>Importer</th>
                                            <th>Processor</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#85457898as234ca3fsafa3444234223first</td>
                                            <td>
                                                <a href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#farmInspectionForm" ><span class="label label-success font-weight-100">Update</span></a>
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#harvesterForm"><span class="label label-success font-weight-100">Update</span></a>
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#exporterForm" ><span class="label label-success font-weight-100">Update</span></a>     
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#importerForm" ><span class="label label-success font-weight-100">Update</span></a>                                      
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#processingForm" ><span class="label label-success font-weight-100">Update</span></a> 
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>#8545735sf32as234ca3fsafa3444234223</td>
                                            <td><span class="label label-success font-weight-100">Compilited</span></td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                            <td><span class="label label-warning font-weight-100">Processing</span>  </td>
                                            <td><span class="label label-danger font-weight-100">Not Available</span> </td>
                                            <td><span class="label label-danger font-weight-100">Not Available</span> </td>                
                                        </tr>
                                        <tr>
                                            <td>#8545735sf32as234ca3fs54asf2444234223</td>
                                            <td><span class="label label-success font-weight-100">Compilited</span></td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                            <td><span class="label label-success font-weight-100">Compilited</span>  </td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                        </tr>
                                    </tbody>
                                </table>

                            <!-- Farm Inspection Form -->
                            <form id="farmInspectionForm" class="mfp-hide white-popup-block">
                                <h1>Farm Inspection</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="InspectorId">Inspector ID Number</label>
                                        <input type="text" class="form-control" id="InspectorId" name="inspectorId" placeholder="inspector id number" required="">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="typeOfSeed">Type of Seed</label>
                                        <input type="text" class="form-control" id="typeOfSeed" name="typeOfSeed" placeholder="type of seed" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="coffeeFamily">Coffee Family</label>
                                        <input type="text" class="form-control" id="coffeeFamily" name="coffeeFamily" placeholder="coffee family" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="fertilizer">Fertilizer Used</label>
                                        <input type="text" class="form-control" id="fertilizer" name="fertilizer" placeholder="fertilizer used" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="farmAddress">Farm Address</label>
                                        <br>
                                        <textarea class="form-control" id="farmAddress" name="farmAddress" placeholder="farm address"></textarea>
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect" >Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                             <!-- Harvesting Form -->
                            <form id="harvesterForm" class="mfp-hide white-popup-block ">
                                <h1>Harvesting</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="registratoinNo">Registration No</label>
                                        <input type="text" class="form-control" id="registratoinNo" name="registratoinNo" placeholder="registration number" required="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="farmerName">Farmer Name</label>
                                        <input type="text" class="form-control" id="farmerName" name="farmerName" placeholder="farmer name" required="">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="coffeeVeriety">Coffee Variety</label>
                                        <input type="text" class="form-control" id="coffeeVeriety" name="coffeeVeriety" placeholder="coffee variety" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="temperature">Temperature</label>
                                        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="temperature" required="">
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label" for="humidity">Humidity</label>
                                        <input type="text" class="form-control" id="humidity" name="humidity" placeholder="humidity" required="">
                                    </div>                                
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                            <!-- Exporter Form -->
                            <form id="exporterForm" class="mfp-hide white-popup-block">
                                <h1>Exporting</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="departureTime">Time of Departure</label>
                                        <input type="text" class="form-control" id="departureTime" name="departureTime" placeholder="time of departure" required="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="estimateArrival">Estimate Time of Arrival</label>
                                        <input type="text" class="form-control" id="estimateArrival" name="estimateArrival" placeholder="estimate arrival" required="">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="dispatchDetails">Dispatch Details</label>
                                        <input type="text" class="form-control" id="dispatchDetails" name="dispatchDetails" placeholder="dispatch details" required="">
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                            <!-- Importer Form -->
                            <form id="importerForm" class="mfp-hide white-popup-block">
                                <h1>Importing</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="warehouse">Warehouse Information</label>
                                        <input type="text" class="form-control" id="warehouse" name="warehouse" placeholder="warehouse information" required="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="processDispatch">Processing & Dispatch</label>
                                        <input type="text" class="form-control" id="processDispatch" name="processDispatch" placeholder="processing & dispatch" required="">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="payment">Payment Confirmation</label>
                                        <input type="text" class="form-control" id="payment" name="payment" placeholder="payment confirmation" required="">
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                            <!-- Processor Form -->
                            <form id="processingForm" class="mfp-hide white-popup-block">
                                <h1>Processing</h1><br>
                                <fieldset style="border:0;">
                                    <h4>Roast Coffee</h4><br>
                                    <div class="form-group">
                                        <label class="control-label" for="quantity">Quantity</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" required="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="temperature">Temperature </label>
                                        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="temperature" required="">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="time">Time for Roasting</label>
                                        <input type="text" class="form-control" id="time" name="time" placeholder="time for roasting" required="">
                                    </div>
                               
                                    <h4>Grinding</h4><br>
                                     <div class="form-group">
                                        <label class="control-label" for="quantity">Grinding</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" required="">
                                    </div>
                           
                                    <h4>Packaging</h4><br>
                                    <div class="form-group">
                                        <label class="control-label" for="quantity">Date</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" required="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="temperature">Time</label>
                                        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="temperature" required="">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="time">Place</label>
                                        <input type="text" class="form-control" id="time" name="time" placeholder="time for roasting" required="">
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- /.container-fluid -->
        
<?php include('templates/_footer.php');?>   