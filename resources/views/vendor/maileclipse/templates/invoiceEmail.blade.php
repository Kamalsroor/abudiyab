<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skyline Invoice Email</title>
  <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Lato:400);

    /* Take care of image borders and formatting */

    img {
      max-width: 600px;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a {
      text-decoration: none;
      border: 0;
      outline: none;
    }

    a img {
      border: none;
    }

    /* General styling */

    td, h1, h2, h3  {
      font-family: Helvetica, Arial, sans-serif;
      font-weight: 400;
    }

    body {
      -webkit-font-smoothing:antialiased;
      -webkit-text-size-adjust:none;
      width: 100%;
      height: 100%;
      color: #37302d;
      background: #ffffff;
    }

     table {
      border-collapse: collapse !important;
    }


    h1, h2, h3 {
      padding: 0;
      margin: 0;
      color: #ffffff;
      font-weight: 400;
    }

    h3 {
      color: #21c5ba;
      font-size: 24px;
    }

    .important-font {
      color: #0b1677;
      font-weight: bold;
    }

    .hide {
      display: none !important;
    }

    .force-full-width {
      width: 100% !important;
    }
  </style>

  <style type="text/css" media="screen">
    @media screen {
       /* Thanks Outlook 2013! http://goo.gl/XLxpyl*/
      td, h1, h2, h3 {
        font-family: 'Lato', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {
      table[class="w320"] {
        width: 320px !important;
      }

      table[class="w300"] {
        width: 300px !important;
      }

      table[class="w290"] {
        width: 290px !important;
      }

      td[class="w320"] {
        width: 320px !important;
      }

      td[class="mobile-center"] {
        text-align: center !important;
      }

      td[class="mobile-padding"] {
        padding-left: 20px !important;
        padding-right: 20px !important;
        padding-bottom: 20px !important;
      }

      td[class="mobile-block"] {
        display: block !important;
        width: 100% !important;
        text-align: left !important;
        padding-bottom: 20px !important;
      }

      td[class="mobile-border"] {
        border: 0 !important;
      }

      td[class*="reveal"] {
        display: block !important;
      }
    }
  </style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
<table width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="center" valign="top" bgcolor="#ffffff" width="100%">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-bottom: 3px solid #0b1677;" width="100%"><center>
<table class="w320" width="1000" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-center" style="padding: 10px 0; text-align: left;" valign="top"><img src="{{asset('front/img/ABUDIYAB2.jpg')}}" width="250" height="62" /></td>
</tr>
</tbody>
</table>
</center></td>
</tr>
<tr>
<td style="background: url('{{asset('front/img/THANKYOU.jpg')}}') no-repeat center; background-color: #8b8284; background-position: center;" valign="top" bgcolor="#8b8284"><!-- [if gte mso 9]>
          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:303px;">
            <v:fill type="tile" src="https://www.filepicker.io/api/file/kmlo6MonRpWsVuuM47EG" color="#8b8284" />
            <v:textbox inset="0,0,0,0">
          <![endif]-->
<div><center>
<table class="w320" width="950" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="vertical-align: middle; padding-right: 15px; padding-left: 15px; text-align: left;" valign="middle" height="303">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<h2>&nbsp;</h2>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</center></div>
<!-- [if gte mso 9]>
            </v:textbox>
          </v:rect>
          <![endif]--></td>
</tr>
<tr>
<td valign="top"><center>
<table class="w320" width="900" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-bottom: 1px solid #a1a1a1;" valign="top">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-padding" style="padding: 30px 0;">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>

<td style="text-align: left; width: 400px;"><span class="important-font"> {{Auth()->user()->name}} <br /></span> {{$user->address}} </td>
<td style="text-align: right; vertical-align: top; width: 230px;"><span class="important-font"> Invoice: {{$order->id}}<br /></span> {{$order->created_at}}</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td class="mobile-padding" style="padding-bottom: 30px;">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-block" width="20%">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-border" style="background-color: #0b1677; color: #ffffff; padding: 5px; border-right: 3px solid #ffffff;">car name</td>
</tr>
<tr>
<td style="background-color: #ebebeb; padding: 8px; border-top: 3px solid #ffffff;">{{$order->car->name}}</td>
</tr>
</tbody>
</table>
</td>
<td class="mobile-block" width="20%">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-border" style="background-color: #0b1677; color: #ffffff; padding: 5px; border-right: 3px solid #ffffff;">receiving branch </td>
</tr>
<tr>
<td style="background-color: #ebebeb; padding: 8px; border-top: 3px solid #ffffff;">{{$receiving_branch->name}}</td>
</tr>

</tbody>
</table>
</td>
<td class="mobile-block" width="20%">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-border" style="background-color: #0b1677; color: #ffffff; padding: 5px; border-right: 3px solid #ffffff;">delivery branch </td>
</tr>
<tr>
<td style="background-color: #ebebeb; padding: 8px; border-top: 3px solid #ffffff;">{{$delivery_branch->name}}</td>
</tr>
</tbody>
</table>

</td>
<td class="mobile-block" width="20%">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-border" style="background-color: #0b1677; color: #ffffff; padding: 5px; border-right: 3px solid #ffffff;">reciving date  </td>
</tr>
<tr>
<td style="background-color: #ebebeb; padding: 8px; border-top: 3px solid #ffffff;">{{$reciving_date}}</td>
</tr>
</tbody>
</table>
</td>
<td class="mobile-block" width="20%">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="mobile-border" style="background-color: #0b1677; color: #ffffff; padding: 5px; border-right: 3px solid #ffffff;">delivery date  </td>
</tr>
<tr>
<td style="background-color: #ebebeb; padding: 8px; border-top: 3px solid #ffffff;">{{$delivery_date}}</td>
</tr>
</tbody>
</table>
</td>


<td class="mobile-block" width="20%">
<table class="force-full-width" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #0b1677; color: #ffffff; padding: 5px;">Amount</td>
</tr>
<tr>
<td style="background-color: #ebebeb; padding: 8px; border-top: 3px solid #ffffff;">{{$order->price}}</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>

</tbody>
</table>
</td>
</tr>
</tbody>
</table>

</center></td>
</tr>

</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>
