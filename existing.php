       
    <div class="container">
        <div class="row form-group">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li class="active"><a href="#step-1">
                        <h4 class="list-group-item-heading">Step 1</h4>
                        <p class="list-group-item-text">First step description</p>
                    </a></li>
                    <li class="disabled"><a href="#step-2">
                        <h4 class="list-group-item-heading">Step 2</h4>
                        <p class="list-group-item-text">Second step description</p>
                    </a></li>
                    <li class="disabled"><a href="#step-3">
                        <h4 class="list-group-item-heading">Step 3</h4>
                        <p class="list-group-item-text">Third step description</p>
                    </a></li>
                    <li class="disabled"><a href="#step-4">
                        <h4 class="list-group-item-heading">Step 4</h4>
                        <p class="list-group-item-text">Second step description</p>
                    </a></li>    
                </ul>
            </div>
        </div>
    </div>  

<form class="container">

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1> STEP 1</h1>

<!-- <form> -->               
                
    <div class="container col-xs-12">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Name
                        </th>
                        <th class="text-center">
                            Surname
                        </th>
                        <th class="text-center">
                            Email
                        </th>
                        
                        <th class="text-center">
                            Gender
                        </th>                       
                        
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='sur0' placeholder='Surname' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='email0' placeholder='Email' class="form-control"/>
                        </td>
                        <td>
                        <select type="text" name="gender0" class="form-control">
                            <option name="male" value="male">Male</option>
                            <option name="Female" value="Female">Female</option>
                            <option name="3rdgen" value="none">None</option>
                        </select>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
                </table>
            </div>
        </div>
        <a id="add_row" class="btn btn-success pull-left">Add Row</a><a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>
    </div>
                
<!-- </form> -->
                
                <button id="activate-step-2" class="btn btn-primary btn-md">Activate Step 2</button>
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 2</h1>
                
<!--<form></form> --> 
                
                <button id="activate-step-3" class="btn btn-primary btn-md">Activate Step 3</button>
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 3</h1>
                
<!--<form></form> --> 
                
                <button id="activate-step-4" class="btn btn-primary btn-md">Activate Step 4</button>
            </div>
        </div>
    </div>

</form>

<form class="container">
    
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 4</h1>
                <h2 class="text-left"> Choose from the services</h2>
                <table class="table table-bordered table-hover" id="tab_logic">
                   <thead>
                    <tr>
                       <th class="text-center">
                            External Car Washing
                        </th>
                        <td>
                        <button type="button">Add</button>
                        <br><br>
                        <button type="button">Remove</button>

                        </td>
                        <br><br>
                        <th class="text-center">
                            Carpet Cleaning
                        </th>
                        <td>
                        <button type="button">Add</button>
                        <br><br>
                        <button type="button">Remove</button>
                        </td>
                        <br><br>
                        <th class="text-center">
                            Glass Cleaning (Inner and exterior)
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <br><br>
                        <button type="button">Remove</button>
                        </td>
                         <br><br>
                        <th class="text-center">
                            Car shinning with dry cloth
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <br><br>
                        <button type="button">Remove</button>
                        </td>
                         <br><br>
                        <th class="text-center">
                            Pressure water  cleaning
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <br><br>
                        <button type="button">Remove</button>
                        </td>
                                                <br><br>
                        <th class="text-center">
                            Dust removing
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <br><br>
                        <button type="button">Remove</button>
                        </td>
                    </tr>
                </thead>
                </table>
            
                
            </div>
        </div>
    </div>

</form>
<!--////////////////////////////////////////////////////////////////////////-->
       
    <div class="container">
        <div class="row form-group">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li class="active"><a href="#step-1">
                        <h4 class="list-group-item-heading">Step 1</h4>
                        <p class="list-group-item-text">Choose Your Space</p>
                    </a></li>
                    <li class="disabled"><a href="#step-2">
                        <h4 class="list-group-item-heading">Step 2</h4>
                        <p class="list-group-item-text">Select your Date & time</p>
                    </a></li>
                    <li class="disabled"><a href="#step-3">
                        <h4 class="list-group-item-heading">Step 3</h4>
                        <p class="list-group-item-text">Booking</p>
                    </a></li>
                    <li class="disabled"><a href="#step-4">
                        <h4 class="list-group-item-heading">Step 4</h4>
                        <p class="list-group-item-text">Choose your Services</p>
                    </a></li>    
                </ul>
            </div>
        </div>
    </div>  

<form class="container">

    <div class="row setup-content" id="step-1">

        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1> STEP 1</h1>

<!-- <form> -->               
                
    <div class="container col-xs-12">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                       <th class="text-center">
                            Shooping Mall
                        </th>
                        <td>
                        <button type="button">Book Now</button>
                        </td>
                        <br><br>
                        <th class="text-center">
                            Theaters
                        </th>
                        <td>
                        <button type="button">Book Now</button>
                        </td>
                        <br><br>
                        <th class="text-center">
                            Others
                        </th>   
                        <td>
                        <button type="button">Book Now</button>
                        </td>
                  
                        
                    </tr>
                </thead>
                
                </table>
            </div>
        </div>
        <a id="add_row" class="btn btn-success pull-left">Add Row</a><a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>
    </div>
                
<!-- </form> -->
                
                <button id="activate-step-2" class="btn btn-primary btn-md">Activate Step 2</button>
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 2</h1>
                
                 <div class="container col-xs-12">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                <thead><!-- 
                    <tr >
                        <th class="text-center">
                            No.
                        </th>
                        <th class="text-center">
                            state
                        </th>
                        <th class="text-center">
                            city
                        </th>
                        <th class="text-center">
                            Location
                        </th>
                        
                        --> <th class="text-center">
                            Entry Date & Time:
                        </th> 

                        <th class="text-center">
                            Exit Date & Time:                </th>                     
                        
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0'>
                        
                        <td>
                        <input type="datetimelocal" name='city0' placeholder='Enter Date & Time' class="form-control"/>
                        </td>
                        <td>
                        <input type="datetimepicker" name='Loc0' placeholder='Enter Exit Date & Time' class="form-control"/>
                        </td>
                        
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
                </table>
            </div>
        </div>
        <a id="add_row" class="btn btn-success pull-left">Add Row</a><a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>
    </div>
                
<!-- </form> -->

<!--<form></form> --> 
                
                <button id="activate-step-3" class="btn btn-primary btn-md">Activate Step 3</button>
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 3</h1>

                    <h2 class="text-left"> Personal & Vehicle Details</h2>
                    <div class="container col-xs-12">
                        <div class="row clearfix">
                        <div class="col-md-12 column">
                         <table class="table table-bordered table-hover" id="tab_logic">
                            <thead>
                                <tr>
                        <th class="text-center">
                            Name
                        </th>
                        <th class="text-center">
                            Email
                        </th>
                        <th class="text-center">
                            Contact no.
                        </th>
                        <th class="text-center">
                            City
                        </th>
                        
                         <th class="text-center">
                            Location
                        </th> 

                        <th class="text-center">
                            Pincode          
                         </th>                     
                        
                    </tr>
                </thead>
            </div>
        </div>
    </div>
</table>
                <tbody>
                    <tr id='addr0'>
                        
                        <td>
                        <input type="text" name='city0' placeholder='Enter your full name' class="form-control"/>
                        </td>
                        <td>
                        <input type="email" name='Loc0' placeholder='Email' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='city0' placeholder='Contact no.' class="form-control"/>
                        </td>
                        <td>
                        <select>
                            <option value="ahmd">Ahmedabad</option>
                           
                        </select>
                        </td>
                        <td>
                        <input type="text" name='Loc0' placeholder='Location' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='Pin0' placeholder='Pincode' class="form-control"/>
                        </td>
                        
                    </tr>

                    <div class="container col-xs-12">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            Vehicle type
                        </th>
                        <th class="text-center">
                            Vehicle no.
                        </th>                   
                        
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0'>
                        
                
                        <td>
                        <select>
                            <option value="ahmd">two wheeler</option>
                           <option value="ahmd">four wheeler</option>
                        </select>
                        </td>
                        <td>
                        <input type="text" name='Loc0' placeholder='Vehicle no.' class="form-control"/>
                        </td>
                        
                    </tr>


                    <tr id='addr1'></tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
                    <button type="button">Submit</button>
                <br><br>
                <button id="activate-step-4" class="btn btn-primary btn-md">Activate Step 4</button>
            </div>
        </div>
    </div>

</form>
<!--
<form class="container">
    
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 4</h1>
                <table class="table table-bordered table-hover" id="tab_logic">
                   <thead>
                    <tr>
                       <th class="text-center">
                            External Car Washing
                        </th>
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>

                        </td>
                        <br><br>
                        <th class="text-center">
                            Carpet Cleaning
                        </th>
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                        <br><br>
                        <th class="text-center">
                            Glass Cleaning (Inner and exterior)
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                         <br><br>
                        <th class="text-center">
                            Car shinning with dry cloth
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                         <br><br>
                        <th class="text-center">
                            Pressure water  cleaning
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                                                <br><br>
                        <th class="text-center">
                            Dust removing
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                    </tr>
                </thead>
                </table>
            </div>
        </div>
    </div>

</form> -->


<form class="container">
    
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 4</h1>
                <table class="table table-bordered table-hover" id="tab_logic">
                   <thead>
                    <tr>
                       <th class="text-center">
                            External Car Washing
                        </th>
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>

                        </td>
                        <br><br>
                        <th class="text-center">
                            Carpet Cleaning
                        </th>
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                        <br><br>
                        <th class="text-center">
                            Glass Cleaning (Inner and exterior)
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                         <br><br>
                        <th class="text-center">
                            Car shinning with dry cloth
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                         <br><br>
                        <th class="text-center">
                            Pressure water  cleaning
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                                                <br><br>
                        <th class="text-center">
                            Dust removing
                        </th>   
                        <td>
                        <button type="button">Add</button>
                        <button type="button">Remove</button>
                        </td>
                    </tr>
                </thead>
                </table>
            </div>
        </div>
    </div>

</form>