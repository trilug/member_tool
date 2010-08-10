<h1><?php echo $r["first_name"]?> <?php echo $r["last_name"]?></h1>

<p>This is the membership information for <b><?php echo $r["first_name"]?> <?php echo $r["last_name"]?></b>.</p>

<center>

<table>

<tr>
<td align=center colspan=2 bgcolor=silver><b>Name</b> (<a href=./?cmd=edit&id=<?php echo $r["member_id"]?>>edit</a> | <a href=./?cmd=delete&id=<?php echo $r["member_id"]?>>delete</a> | <a href=./?cmd=email&id=<?php echo$r["member_id"]?>>email info</a>)</td>
</tr>

<tr>
<td align=right>First name:</td>
<td><?php echo $r["first_name"]?></td>
</tr>

<tr>
<td align=right>Last name:</td>
<td><?php echo $r["last_name"]?></td>
</tr>

<tr>
<td align=center colspan=2 bgcolor=silver><b>Addresses</b></td>
</tr>

<tr>
<td align=right>Address 1:</td>
<td><?php echo $r["address_1"]?></td>
</tr>

<tr>
<td align=right>Address 2:</td>
<td><?php echo $r["address_2"]?></td>
</tr>

<tr>
<td align=right>City:</td>
<td><?php echo $r["city"]?></td>
</tr>

<tr>
<td align=right>State:</td>
<td><?php echo $r["state"]?></td>
</tr>

<tr>
<td align=right>Zip:</td>
<td><?php echo $r["zip_code"]?></td>
</tr>

<tr>
<td align=right>Email address:</td>
<td><a href=mailto:<?php echo $r["email"]?>><?php echo $r["email"]?></a></td>
</tr>

<tr>
<td align=right>Telephone:</td>
<td><?php echo $r["telephone"]?></td>
</tr>

<tr>
<td align=center colspan=2 bgcolor=silver><b>Demographics</b></td>
</tr>

<tr>
<td align=right>Member ID:</td>
<td><?php echo $r["member_id"]?></td>
</tr>

<tr>
<td align=right>Member Since:</td>
<td><?php
if ($r["id_equals_date"] == 'Y') {
  echo date("l, F j, Y",$r["member_id"]);
} else {
  echo "before December 7, 2000";
}
?></td>
</tr>

<tr>
<td align=right>Employer:</td>
<td><?php echo $r["employer"]?></td>
</tr>

<tr>
<td align=right>Occupation:</td>
<td><?php echo $r["occupation"]?></td>
</tr>

<tr>
<td align=right>Year of birth:</td>
<td><?php echo $r["birth_year"]?></td>
</tr>

</table>

</center>
