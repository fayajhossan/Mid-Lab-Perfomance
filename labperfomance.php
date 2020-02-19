
<!Doctype.html>
<html>
<title>Form Validation</title>
<body>
	<form method="post" action="register.php">
	<fieldset style="width: 500px">
	<table border='1px' align="center" border-spacing='5px's>
	<tr>
		<td colspan="3" align="center"><h2>PERSON PROFILE</h2></td>

	</tr>
	<tr>
		<td>Name</td>
		<td>
			<input type="text" name="name">
		</td>
		<td></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="Email" name="Email"></td>
			<td></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="Gender" value="Male">Male
				<input type="radio" name="Gender" value="Female">Female
				<input type="radio" name="Gender" value="Others">Others

			</td>
			<td></td>
			<tr>
				<td>Date Of Birth</td>
				<td>
					<input type="text" size="4" name="dd">/
					<input type="text" size="4" name="mm">/
					<input type="text" size="4" name="yyyy">(dd/mm/yyyy)

				</td>
				<td></td>

			</tr>

		</tr>
     <tr>
     	<td>Blood Group</td>
     	<td>
     		<select>
     			<option>A+</option>
     			<option>B+</option>
     			<option>O+</option>
     			<option>B-</option>
     		</select>
     		

     	</td>
        <td size="4"></td>

     </tr>

     	<td>Degree</td>
     	<td>
     		<input type="checkbox" name="Degree">SSC
     		<input type="checkbox" name="Degree">HSC
     		<input type="checkbox" name="Degree">BSc.
     		<input type="checkbox" name="Degree">MSc.

     	</td>
        <td></td>

     </tr>
     <tr>
     	<td>Photo</td>
     	<td>
     		<input type="file" name="Photo_file">
     	</td>
     	<td></td>
     </tr>
     <tr></tr>
  <tr>
     	<td colspan="3" align="right">
     		
     		
     	</td>
     	
   
     </tr>
     </tr>
     <tr>
     	<td colspan="3" align="right">
     		<input type="submit" name="submit">
     		<input type="reset" name="reset">
     	</td>
     	
   
     </tr>



		
		<!-- name: <input type="text" name="uname" value="" > -->


</table>
</fieldset>
	</form>





</body>





</html>



