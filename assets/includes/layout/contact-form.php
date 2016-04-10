<form method="POST" id="contact-form" class="form-control" action="submit.php">
	<table>
		<thead>
			<tr>
				<td><label>name</label></td>
				<td><input name="form-name" id="form-name" type="text" class="form-control"></td>
			</tr>
			<tr>
				<td><label>email address</label></td>
				<td><input name="form-email-address" id="form-email-address" type="email" class="form-control"></td>
			</tr>
			<tr>
				<td>message</td>
				<td><textarea name="message" id="message" type="textarea" class="form-control" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>sign up for our newsletter</td>
				<td><input name="newsletter" id="newsletter" type="checkbox" class="form-control" rows="10"></td>
			</tr>
			<tr>
				<td colspan="2"><button class="form-control btn btn-primary" action="submit" name="submit" value="submit">Submit</button></td>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
</form>