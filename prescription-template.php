                                    <div style="text-align:center;margin:0px;">
                                        <img src="img/<?php echo $headerlogo; ?>"
                                            style="max-width:250px; align-items:center" />
                                    </div>

                                    <p style="text-align: center; color: black; margin: 0;font-size:13px;">
                                        <?php echo $formheaderaddress; ?>

                                    </p>

                                    <p style="text-align: center; color: black; margin: 0;font-size:13px;">

                                         <?php echo $businessContact; ?>
                                    </p>




                                    <hr style="border: 1px solid black; margin: 10px 0;">

                                    <!-- Patient Info Row -->
                                    <div
                                        style="display: flex; justify-content: space-between; color: black; margin-bottom: 1px;">
                                        <div style="width: 100%;"><strong>Name:</strong> <span id="print-name"  class="print-name"></span>
                                        </div>

                                    </div>
                                    <div
                                        style="display: flex; justify-content: space-between; color: black; margin-bottom: 1px;">

                                        <div style="width: 100%; text-align: left;">
                                            <strong>Age/Gender:</strong> <span id="print-age"  class="print-age"></span> <span
                                                id="print-gender" class="print-gender"></span>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div style="color: black; margin-bottom: 1px;">
                                        <strong>Address:</strong> <span id="print-address" class="print-address"></span>
                                    </div>

                                    <!-- Rx and Date Row -->
                                    <div
                                        style="display: flex; justify-content: space-between; align-items: flex-start; color: black; margin-bottom: 10px;">
                                        <div style="font-family: serif; font-weight: bold; font-size: 28px;">Rx</div>
                                        <div style="text-align: right;"><strong>Date:</strong> <span
                                                id="print-date" class="print-date"></span></div>
                                    </div>

                                    <!-- Prescription Medicine Section -->
                                    <div id="presmedicine" class="presmedicine" style="color: black; margin-bottom: 30px;">
                                        <!-- Medicine list will be injected here -->
                                    </div>

                                    <!-- Doctor Info at the bottom right -->
                                    <div style="text-align: right; color: black; font-size: 11pt; font-family: Arial;">
                                        <div
                                            style="border-bottom: 1px solid black; width: 200px; margin-left: auto; margin-bottom: 5px;">
                                        </div>

                                        <strong id="print-dentist" class="print-dentist">Dr. Ann Jeth D. Timbol</strong><br>
                                        License No.: <span id="print-license" class="print-license">51755</span><br>
                                        PTR No.: 
                                    </div>




