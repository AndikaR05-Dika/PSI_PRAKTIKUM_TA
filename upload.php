<html>
<head>
	<title>Upload dan Download</title>
</head>
<body>
 
    <a href="indexfoto.php">Home</a>
    <a href="upload.php" class="active">Upload</a>
    <a href="download.php">Download</a>

    <h2>Upload</h2>
            <p>File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip</b> dan besar file (file size) maksimal hanya 1 MB.</p>
 
            <?php
			include('config2.php');
			if($_POST['upload'])
			{
				$allowed_ext	= array ('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
 
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
 
				if(in_array($file_ext, $allowed_ext) == true)
				{
					if($file_size < 1044070)
					{
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file ($file_tmp, $lokasi);
						$in = mysql_query ("INSERT INTO download VALUES (NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
						if($in)
						{
							echo 'SUCCESS: File berhasil di Upload!';
						}
						else
						{
							echo 'ERROR: Gagal Upload File!';
						}
					}
					else
					{
						echo 'ERROR: Besar ukuran file (file size) maksimal 1 MB!';
					}
				}
				else
				{
					echo 'ERROR: Ekstensi file tidak di izinkan!';
				}
			}
			?>
 
            <p>
            <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee">
            	<tr>
                	<td width="40%" align="right"><b>Nama File</b></td><td><b>:</b></td><td><input type="text" name="nama" size="40" required /></td>
                </tr>
                <tr>
					<td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" /></td>
                </tr>
            </table>
            </form>
            </p>

	
 
</body>
</html>