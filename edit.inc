<h1>Edit record</h1>

<p>Use this form to edit <b><?php echo $r["first_name"]?> <?php echo $r["last_name"]?>'s</b> record. <em>Remember, items marked with a red asterisk (<font color=red>*</font>) are required.</em></p>

<center>

<table>

<form action=./ method=post>
<input type=hidden name=cmd value=edit>
<input type=hidden name=id value=<?php echo $r["member_id"]?>>

<tr>
<td align=center colspan=2 bgcolor=silver><b>Name</b> (<a href=./?cmd=delete&id=<?php echo $r["member_id"]?>>delete</a>)</td>
</tr>

<tr>
<td align=right>First name<font color=red>*</font>:</td>
<td><input name=first_name value="<?php echo $r["first_name"]?>"></td>
</tr>

<tr>
<td align=right>Last name<font color=red>*</font>:</td>
<td><input name=last_name value="<?php echo $r["last_name"]?>"></td>
</tr>

<tr>
<td align=center colspan=2 bgcolor=silver><b>Addresses</b></td>
</tr>

<tr>
<td align=right>Address 1<font color=red>*</font>:</td>
<td><input name=address_1 value="<?php echo $r["address_1"]?>"></td>
</tr>

<tr>
<td align=right>Address 2:</td>
<td><input name=address_2 value="<?php echo $r["address_2"]?>"></td>
</tr>

<tr>
<td align=right>City<font color=red>*</font>:</td>
<td><input name=city value="<?php echo $r["city"]?>"></td>
</tr>

<tr>
<td align=right>State<font color=red>*</font>:</td>
<td><input name=state value="<?php echo $r["state"]?>"></td>
</tr>

<tr>
<td align=right>Zip<font color=red>*</font>:</td>
<td><input name=zip_code value="<?php echo $r["zip_code"]?>"></td>
</tr>

<tr>
<td align=right>Email address<font color=red>*</font>:</td>
<td><input name=email value="<?php echo $r["email"]?>"></td>
</tr>

<tr>
<td align=right>Telephone<!-- font color=red>*</font -->:</td>
<td><input name=telephone value="<?php echo $r["telephone"]?>"></td>
</tr>

<tr>
<td align=center colspan=2 bgcolor=silver><b>Demographics</b></td>
</tr>

<tr>
<td align=right>Member ID:</td>
<td><?php echo $r["member_id"]?></td>
</tr>

<tr>
<td align=right>Occupation<!-- font color=red>*</font -->:</td>
<td><input name=occupation value="<?php echo $r["occupation"]?>"></td>
</tr>

<tr>
<td align=right>Employer<!-- font color=red>*</font -->:</td>
<td><input name=employer value="<?php echo $r["employer"]?>"></td>
</tr>

<tr>
<td align=right>Year of birth<!-- font color=red>*</font -->:</td>
<td><input name=birth_year value="<?php echo $r["birth_year"]?>"></td>
</tr>

<tr>
<td></td>
<td><input type=submit name=submit value=Submit> <input type=reset><td>
</tr>

</form>

</table>

</center>
