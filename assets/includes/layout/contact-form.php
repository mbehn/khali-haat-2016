<form method="POST" id="contact-form" class="form form-control" action="submit.php">
	<table>
			<tr>
				<td><label>name</label></td>
				<td><input name="name" id="form-name" type="text" class="form-control"></td>
			</tr>
			<tr>
				<td><label>email address*</label></td>
				<td><input name="form-email-address" id="form-email-address" type="email" class="form-control" required></td>
			</tr>
			<tr>
				<td>message</td>
				<td><textarea name="message" id="message" class="form-control" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>sign up for our newsletter</td>
				<td><input name="newsletter" id="newsletter" type="checkbox" class="form-control" value="1"></td>
			</tr>
			<tr>
				<td colspan="2"><button class="form-control btn btn-primary" action="submit" name="submit" value="submit">submit</button></td>
			</tr>
	</table>
</form>