<?
include("conn.php");
include("function.php"); 

if($_POST['import']=="��������"){

	$leadExcel=$_POST['leadExcel'];
	
	if($leadExcel == "true")
	{
		//echo "OK";die();
		//��ȡ�ϴ����ļ���
		$filename = $HTTP_POST_FILES['inputExcel']['name'];
		//�ϴ����������ϵ���ʱ�ļ���
		$tmp_name = $_FILES['inputExcel']['tmp_name'];
		
		$msg = uploadFile($filename,$tmp_name);
		echo $msg;
	}
}
?>