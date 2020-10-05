<style>
  html,body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
  }
  * {
    -ms-text-size-adjust: 100%;
  }
  table,td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
  }
  img {
    -ms-interpolation-mode: bicubic;
  }
  a {
    text-decoration: none;
  }
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>SELLF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
</html>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background: #fafafa">
	<center>
		<table role="presentation" cellspacing="0″ cellpadding=" 0″ border="0"
			width="600px" border="0">
			<tr>
				<th style="background: #673189; padding: 25px 0px 20px; border-radius: 15px 15px 0px 0px;">
					<img src="https://desenvolvimento.sellf.com.br/templates/default/img/logo_email.png" height=70px alt="SELLF" border="0" style="width: auto; max-width: 200px; height: 70px; background: transparent; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #fff; display: block; margin: 0px auto;">
				</th>
      </tr>
      <tr>
        <td align="center" style="padding: 25px 10px 45px; background: #fff;">
          <h5 style="color: #333; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 20px;">
            Testetestetestetestetestetesteteste
          </h5>
          <p style="color: #333; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 14px;">
            Testetestetestetestetestetestetestetesteteste
            <br />
            <br />
            <br />
            <br />
            <?php echo $mailData['leadName']?>
            <?php echo $mailData['leadEmail']?>
            <?php echo $mailData['leadMessage']?>
            <?php echo $mailData['leadTelephone']?>
            <?php echo $mailData['idProperty']?>
            <?php echo $mailData['advertiserName']?>
            <?php echo $mailData['advertiserEmail']?>
          </p>
          <p style="color: #333; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 14px;">
              <a href="#" style="text-decoration: none; background: linear-gradient(45deg, #8a59a9, #6d249a); color: #fff; border: 0px; padding: 10px 40px; border-radius: 40px;
              filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, startColorstr=#8a59a9, endColorstr=#6d249a);
              -ms-filter: 'progid:DXImageTransform.Microsoft.gradient (GradientType=0, startColorstr=#8a59a9, endColorstr=#6d249a)';
              ">
                TESTE
              </a>
          </p>
        </td>
			</tr>
			<tr>
        <th style="background: #673189; padding: 5px 0px 20px; border-radius: 0px 0px 15px 15px;"> 
            &nbsp;
        </th>
			</tr>
			<tr style="background: #fafafa;">
				<td align="center" style="padding-top: 20px; background: #fafafa;">
					<p style="color: #333; font-family: Roboto-Regular, Helvetica, Arial, sans-serif; font-size: 11px;">
						Você concordou com os 
              <a href="https://desenvolvimento.sellf.com.br/termos-e-condicoes" style="text-decoration: none; color: #673189;">
                  termos e condições
              </a> 
              e 
              <a href="https://desenvolvimento.sellf.com.br/politica-privacidade" style="text-decoration: none; color: #673189;">
                  política de privacidade
              </a>
              .
					</p>
				</td>
			</tr>
    </table>
  </center>
</body>