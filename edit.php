<?php
# Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
# Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
?>

<?php



if (!$id) {

    # error
    $error = "This function requires an ID for input.";
    include "./error.inc";

} elseif (!$submit) {

    # create an sql query and execute it
    $sql = "SELECT *
                FROM member_list
                WHERE member_id = $id";

    try {
        foreach ($pdo->query($sql) as $r) {

            # display the result
            include "./edit.inc";
        }
    } catch (PDOException $pe) {
        echo "List Edit SQL Error: " . $pe->getMessage();
        die();
    }


} else {

    # make sure all fields have content
    if ($first_name === ""
        || $last_name === ""
        || $address_1 === ""
        || $city === ""
        || $state === ""
        || $zip_code === ""
        || $email === ""
        #|| $telephone            === ""
        #|| $employer             === ""
        #|| $occupation           === ""
        #|| $birth_year           === ""
    ) {

        # error
        $error = "At least one of the required inputs was not supplied.";
        include "./error.inc";

    } # update the database
    else {

        # great, create an sql update query and execute it
        $sql = "UPDATE member_list
                    SET first_name  = '$first_name',
                        last_name   = '$last_name',
                        address_1   = '$address_1',
                        address_2   = '$address_2',
                        city        = '$city',
                        state       = '$state',
                        email       = '$email',
                        telephone   = '$telephone',
                        occupation  = '$occupation',
                        employer    = '$employer',
                        birth_year  = '$birth_year'
                    WHERE member_id = $id";

        try {
            $pdo->query($sql);
        } catch (PDOException $pe) {
            echo "Edit Update SQL Error: " . $pe->getMessage();
            die();
        }


        # uncomment for debuggin' purposes
        #echo mysql_errno().": ".mysql_error()."<BR>"; echo "<pre>$sql</pre>";

        # done
        echo "<h1>Edited</h1> <p>Thank you.</p>";

    }

}


