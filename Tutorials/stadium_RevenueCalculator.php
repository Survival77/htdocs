<body style="background-color: #caa658ff;">
    <h3>Stadium Seating Category Calculations</h3>
    <br>
    <p>Enter the number of tickets sold for each class to calculate the revenue generated from
    <form method="post" action="">
        <label>Class A Tickets Sold:</label>
        <input type="number" name="classATicketSold" min="0" required value="<?php echo isset($_POST['classATicketSold']) ? htmlspecialchars($_POST['classATicketSold']) : '';?>"><br><br>
        <label>Class B Tickets Sold:</label>
        <input type="number" name="classBTicketSold" min="0" required value="<?php echo isset($_POST['classBTicketSold']) ? htmlspecialchars($_POST['classBTicketSold']) : '';?>"><br><br>
        <label>Class C Tickets Sold:</label>
        <input type="number" name="classCTicketSold" min="0" required value="<?php echo isset($_POST['classCTicketSold']) ? htmlspecialchars($_POST['classCTicketSold']) : '';?>"><br><br>
        <button type="submit" name="calculateRevenue">Calculate Revenue</button>
    </form>

    <?php
    //declare variables
    $classATicketSold = '';
    $classBTicketSold = '';
    $classCTicketSold = '';
    $classBRevenue = '';
    $classARevenue = '';
    $classCRevenue = '';
    $totalRevenue = '';

    //initialize the amount to the seat cost
    $classACost = 15;
    $classBCost = 12;
    $classCCost = 9;

    //check whether the user clicks on the calculate Revenue button
    if (isset($_POST['calculateRevenue'])) {
        //assign form values to variables
        $classATicketSold = (int)$_POST['classATicketSold'];
        $classBTicketSold = (int)$_POST['classBTicketSold'];
        $classCTicketSold = (int)$_POST['classCTicketSold'];

        //calculate the revenue for each class
        $classARevenue = $classATicketSold * $classACost;
        $classBRevenue = $classBTicketSold * $classBCost;
        $classCRevenue = $classCTicketSold * $classCCost;

        //calculate the total revenue
        $totalRevenue = $classARevenue + $classBRevenue + $classCRevenue;

        echo "<h4>Revenue Results:</h4>";
        echo "<ul>";
        echo "<li>Class A Revenue: $" . number_format($classARevenue, 2) . "</li>";
        echo "<li>Class B Revenue: $" . number_format($classBRevenue, 2) . "</li>";
        echo "<li>Class C Revenue: $" . number_format($classCRevenue, 2) . "</li>";
        echo "<li><strong>Total Revenue: $" . number_format($totalRevenue, 2) . "</strong></li>";
        echo "</ul>";
    }
    ?>
</body>
</html>