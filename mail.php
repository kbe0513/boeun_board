<?

$toName = "�躸���Կ���";                   // �޴� ��� �̸�
$toMail = "boeun0513@gmail.com";       //�޴��� ����

$content = "�ʿ��� ��� ���߸� ��ų..";  //���� ����
$subject = "����ƶ� �߻���";            //���� ����

$fromName = "�躸��";                      //�������� �̸�
$fromMail = "boeun0513@gmail.com";  //�������� �����ּ�

 

//�ѱ� ������ ���� ���� ���ڵ��� ���ش�.

//����� $content( ���� ���� )�� ���ڵ� ���� �ʴ´�... �ϸ� ������ ����..-_-^

$toName='=?euc-kr?B?'.base64_encode( $toName ).'?=';

$subject ='=?euc-kr?B?'.base64_encode( $subject ).'?=';

$fromName='=?euc-kr?B?'.base64_encode( $fromName ).'?=';

//���ڵ��� ���Ͽ� �ڼ��� ������ �Ͽ����� �����ϱ�.

// http://keepingstar.tistory.com/22


$headers = "Return-Path: <".$fromMail.">\n";
$headers .= "From: ".$fromName." <".$fromMail.">\n";
$headers .= "X-Sender: <".$fromMail.">\n";
$headers .= "X-Mailer: PHP\n";
$headers .= "Reply-To: ".$fromName." <".$fromMail.">\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html;charset=UTF-8\n";

$rs = mail("$toName <$toMail>",$subject,$content,$headers);
echo $rs;

/*
if( $rs ) //���ۼ���
else //���۽���
*/

?>