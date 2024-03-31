<?php 
$data = array(
    array(
        "name" => "Arjun",
        "subscriptions" => ["amazon prime", "netflix"],
        "price" => "10 credits"
    ),
    array(
        "name" => "Rahul",
        "subscriptions" => ["amazon prime", "netflix", "amazon plus", "zomato plus", "svvigy plus"],
        "price" => "25 credits"
    ),
    array(
        "name" => "Rohit",
        "subscriptions" => ["amazon prime", "netflix", "amazon plus", "zomato plus", "svvigy plus"],
        "price" => "25 credits"
    ),
    array(
        "name" => "Raj",
        "subscriptions" => ["amazon prime", "netflix", "amazon plus", "zomato plus"],
        "price" => "20 credits"
    )
);

// Usage:
$subscription = 'netflix'; // replace with the subscription you want to check
$usersWithSubscription = getUsersWithSubscription($data, $subscription);

foreach ($usersWithSubscription as $userName) {
    echo $userName . '<br>';
}

function getUsersWithSubscription($users, $subscription) {
    $usersWithSubscription = []; // Declare the variable inside the function

    foreach ($users as $user) {
        if (in_array($subscription, $user['subscriptions'])) {
            $usersWithSubscription[] = $user['name'];
        }
    }

    return $usersWithSubscription; // Return the result
}
?>
