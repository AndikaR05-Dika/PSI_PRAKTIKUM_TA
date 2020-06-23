<html>
<head>
	<title>Upload dan Download</title>
</head>
<body>
 
    <a href="indexfoto.php">Home</a>
    <a href="upload.php">Upload</a>
    <a href="download.php" class="active">Download</a>

	<h2>Download</h2>
            <p>Download Judul File yang diinginkan.</p>
 
            <p>
            <table class="table" width="100%">
            	<tr>
                	<th width="30">No.</th>
                    <th width="80">Tgl. Upload</th>
                    <th>Nama File</th>
                    <th width="70">Tipe</th>
                    <th width="70">Ukuran</th>
                </tr>

                <?php
				include('config2.php');
				$sql = mysql_query("SELECT * FROM download ORDER BY id ASC");
				if(mysql_num_rows($sql) > 0)
				{
					$no = 1;
					while($data = mysql_fetch_assoc($sql))
					{
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$no.'</td>
							<td align="center">'.$data['tanggal_upload'].'</td>
							<td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td align="center">'.$data['tipe_file'].'</td>
							<td align="center">'.formatBytes($data['ukuran_file']).'</td>
						</tr>
						';
						$no++;
					}
				}
				else
				{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table>
            </p>
 
</body>
</html>