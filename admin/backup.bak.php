
              <li><a href="#tab_1" data-toggle="tab">SHIRT</a></li>
              <li><a href="#tab_2" data-toggle="tab">TUXEDO</a></li>
              <li><a href="#tab_3" data-toggle="tab">SKIRT</a></li>
              <li><a href="#tab_4" data-toggle="tab">WATCH</a></li>
              <li><a href="#tab_5" data-toggle="tab">SANDALS</a></li>


<div class="tab-pane" id="tab_1">

              <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>Name</center></th>
                            <th><center>Description</center></th>
                            <th><center>Supplier</center></th>
                            <th><center>Price</center></th>
                            <th><center>Stocks</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                            
                        $start_from = ($page-1) * $results_per_page;
                        $sql = "SELECT * FROM ".$datatable." WHERE type='menshirt' OR type='womenshirt' ORDER BY productID ASC";
                            $rs_result = $conn->query($sql);
                        while($row = $rs_result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><center><?php echo $row["name"]; ?></center></td>
                            <td><center><?php echo $row["description"]; ?></center></td>
                            <td><center><?php echo $row["supplier"]; ?></center></td>
                            <td><center>&#8369;<?php echo $row["price"]; ?></center></td>
                            <td><center><?php echo $row["stock"]; ?></center></td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              
              <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>Name</center></th>
                            <th><center>Description</center></th>
                            <th><center>Supplier</center></th>
                            <th><center>Price</center></th>
                            <th><center>Stocks</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                            
                        $start_from = ($page-1) * $results_per_page;
                        $sql = "SELECT * FROM ".$datatable." WHERE type='mentuxedo' ORDER BY productID ASC";
                        $rs_result = $conn->query($sql);
                        while($row = $rs_result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><center><?php echo $row["name"]; ?></center></td>
                            <td><center><?php echo $row["description"]; ?></center></td>
                            <td><center><?php echo $row["supplier"]; ?></center></td>
                            <td><center>&#8369;<?php echo $row["price"]; ?></center></td>
                            <td><center><?php echo $row["stock"]; ?></center></td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
              
              <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>Name</center></th>
                            <th><center>Description</center></th>
                            <th><center>Supplier</center></th>
                            <th><center>Price</center></th>
                            <th><center>Stocks</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                            
                        $start_from = ($page-1) * $results_per_page;
                        $sql = "SELECT * FROM ".$datatable." WHERE type='womenskirt' ORDER BY productID ASC";
                            $rs_result = $conn->query($sql);
                        while($row = $rs_result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><center><?php echo $row["name"]; ?></center></td>
                            <td><center><?php echo $row["description"]; ?></center></td>
                            <td><center><?php echo $row["supplier"]; ?></center></td>
                            <td><center>&#8369;<?php echo $row["price"]; ?></center></td>
                            <td><center><?php echo $row["stock"]; ?></center></td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
              
              <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>Name</center></th>
                            <th><center>Description</center></th>
                            <th><center>Supplier</center></th>
                            <th><center>Price</center></th>
                            <th><center>Stocks</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                            
                        $start_from = ($page-1) * $results_per_page;
                        $sql = "SELECT * FROM ".$datatable." WHERE type='menwatch' OR type='ladieswatch' ORDER BY productID ASC";
                            $rs_result = $conn->query($sql);
                        while($row = $rs_result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><center><?php echo $row["name"]; ?></center></td>
                            <td><center><?php echo $row["description"]; ?></center></td>
                            <td><center><?php echo $row["supplier"]; ?></center></td>
                            <td><center>&#8369;<?php echo $row["price"]; ?></center></td>
                            <td><center><?php echo $row["stock"]; ?></center></td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
              
              <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><center>Name</center></th>
                            <th><center>Description</center></th>
                            <th><center>Supplier</center></th>
                            <th><center>Price</center></th>
                            <th><center>Stocks</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                            
                        $start_from = ($page-1) * $results_per_page;
                        $sql = "SELECT * FROM ".$datatable." WHERE type='womensandals' OR type='mensandals' ORDER BY productID ASC";
                            $rs_result = $conn->query($sql);
                        while($row = $rs_result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><center><?php echo $row["name"]; ?></center></td>
                            <td><center><?php echo $row["description"]; ?></center></td>
                            <td><center><?php echo $row["supplier"]; ?></center></td>
                            <td><center>&#8369;<?php echo $row["price"]; ?></center></td>
                            <td><center><?php echo $row["stock"]; ?></center></td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->