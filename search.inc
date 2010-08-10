<h1>Search</h1>

<p>Use this form to search the membership list. <em>Remember, if you select the "like" operator, you will need to include a percent sign (%) in your query.</em></p>

<center>

<table>

<form action=./ method=post>
<input type=hidden name=cmd value=search>

<tr>
<td colspan=2 bgcolor=silver align=center><b>Search form</b></td>
</tr>

<tr>
<td align=right>Field</td>
<td>
<select name=search_field>
<option value=last_name>last name
<option value=first_name>first name
<option value=email>email
<option value=city>city
<option value=zip_code>zip code
<option value=occupation>occupation
<option value=employer>employer
<option value=member_id>member ID
</select>
</td>
</tr>

<tr>
<td align=right>Operator</td>
<td>
<select name=search_operator>
<option value="=">is
<option value=like>like
</select>
</td>
</tr>

<tr>
<td align=right>Query</td>
<td><input name=search_string></td>
</tr>

<tr>
<td></td>
<td><input type=submit name=submit value=Submit> <input type=reset></td>
</tr>

</form>
</table>

</center>

