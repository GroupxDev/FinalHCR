<!DOCTYPE html >

<html>
<head>
    <style type="text/css">
		#messagebody div.rcmBody,#messagebody div.rcmBody #bodyTable,#messagebody div.rcmBody #bodyCell{
			height:100% !important;
			margin:0;
			padding:0;
			width:100% !important;
		}
		#messagebody div.rcmBody table{
			border-collapse:collapse;
		}
		#messagebody div.rcmBody img,#messagebody div.rcmBody a img{
			border:0;
			outline:none;
			text-decoration:none;
		}
		#messagebody div.rcmBody h1,#messagebody div.rcmBody h2,#messagebody div.rcmBody h3,#messagebody div.rcmBody h4,#messagebody div.rcmBody h5,#messagebody div.rcmBody h6{
			margin:0;
			padding:0;
		}
		#messagebody div.rcmBody p{
			margin:1em 0;
			padding:0;
		}
		#messagebody div.rcmBody a{
			word-wrap:break-word;
		}
		#messagebody div.rcmBody .ReadMsgBody{
			width:100%;
		}
		#messagebody div.rcmBody .ExternalClass{
			width:100%;
		}
		#messagebody div.rcmBody .ExternalClass,#messagebody div.rcmBody .ExternalClass p,#messagebody div.rcmBody .ExternalClass span,#messagebody div.rcmBody .ExternalClass font,#messagebody div.rcmBody .ExternalClass td,#messagebody div.rcmBody .ExternalClass div{
			line-height:100%;
		}
		#messagebody div.rcmBody table,#messagebody div.rcmBody td{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		#messagebody div.rcmBody #outlook a{
			padding:0;
		}
		#messagebody div.rcmBody img{
			-ms-interpolation-mode:bicubic;
		}
		#messagebody div.rcmBody,#messagebody div.rcmBody table,#messagebody div.rcmBody td,#messagebody div.rcmBody p,#messagebody div.rcmBody a,#messagebody div.rcmBody li,#messagebody div.rcmBody blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		#messagebody div.rcmBody #bodyCell{
			padding:20px;
		}
		#messagebody div.rcmBody .mcnImage{
			vertical-align:bottom;
		}
		#messagebody div.rcmBody .mcnTextContent img{
			height:auto !important;
		}
		#messagebody div.rcmBody,#messagebody div.rcmBody #bodyTable{
			background-color:#756d6d;
		}
		#messagebody div.rcmBody #bodyCell{
			border-top:0;
		}
		#messagebody div.rcmBody #templateContainer{
			border:0;
		}
		#messagebody div.rcmBody h1{
			color:#606060 !important;
			display:block;
			font-family:Helvetica;
			font-size:40px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-1px;
			margin:0;
			text-align:left;
		}
		#messagebody div.rcmBody h2{
			color:#404040 !important;
			display:block;
			font-family:Helvetica;
			font-size:26px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-.75px;
			margin:0;
			text-align:left;
		}
		#messagebody div.rcmBody h3{
			color:#606060 !important;
			display:block;
			font-family:Helvetica;
			font-size:18px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-.5px;
			margin:0;
			text-align:left;
		}
		#messagebody div.rcmBody h4{
			color:#808080 !important;
			display:block;
			font-family:Helvetica;
			font-size:16px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:normal;
			margin:0;
			text-align:left;
		}
		#messagebody div.rcmBody #templatePreheader{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		#messagebody div.rcmBody .preheaderContainer .mcnTextContent,#messagebody div.rcmBody .preheaderContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:11px;
			line-height:125%;
			text-align:left;
		}
		#messagebody div.rcmBody .preheaderContainer .mcnTextContent a{
			color:#606060;
			font-weight:normal;
			text-decoration:underline;
		}
		#messagebody div.rcmBody #templateHeader{
			background-color:#FFFFFF;
			border-top:10px ridge ;
			border-bottom:10px ridge ;
		}
		#messagebody div.rcmBody .headerContainer .mcnTextContent,#messagebody div.rcmBody .headerContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		#messagebody div.rcmBody .headerContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#messagebody div.rcmBody #templateBody{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		#messagebody div.rcmBody .bodyContainer .mcnTextContent,#messagebody div.rcmBody .bodyContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		#messagebody div.rcmBody .bodyContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#messagebody div.rcmBody #templateColumns{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		#messagebody div.rcmBody .leftColumnContainer .mcnTextContent,#messagebody div.rcmBody .leftColumnContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		#messagebody div.rcmBody .leftColumnContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#messagebody div.rcmBody .centerColumnContainer .mcnTextContent,#messagebody div.rcmBody .centerColumnContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		#messagebody div.rcmBody .centerColumnContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#messagebody div.rcmBody .rightColumnContainer .mcnTextContent,#messagebody div.rcmBody .rightColumnContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		#messagebody div.rcmBody .rightColumnContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#messagebody div.rcmBody #templateFooter{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		#messagebody div.rcmBody .footerContainer .mcnTextContent,#messagebody div.rcmBody .footerContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:11px;
			line-height:125%;
			text-align:left;
		}
		#messagebody div.rcmBody .footerContainer .mcnTextContent a{
			color:#606060;
			font-weight:normal;
			text-decoration:underline;
		}
	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody,#messagebody div.rcmBody table,#messagebody div.rcmBody td,#messagebody div.rcmBody p,#messagebody div.rcmBody a,#messagebody div.rcmBody li,#messagebody div.rcmBody blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[id=bodyCell]{
			padding:10px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcnTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcnBoxedTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcpreview-image-uploader]{
			width:100% !important;
			display:none !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody img[class=mcnImage]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcnImageGroupContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnImageGroupContent]{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnImageGroupBlockInner]{
			padding-bottom:0 !important;
			padding-top:0 !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody tbody[class=mcnImageGroupBlockOuter]{
			padding-bottom:9px !important;
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcnCaptionTopContent],#messagebody div.rcmBody table[class=mcnCaptionBottomContent]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcnCaptionLeftTextContentContainer],#messagebody div.rcmBody table[class=mcnCaptionRightTextContentContainer],#messagebody div.rcmBody table[class=mcnCaptionLeftImageContentContainer],#messagebody div.rcmBody table[class=mcnCaptionRightImageContentContainer],#messagebody div.rcmBody table[class=mcnImageCardLeftTextContentContainer],#messagebody div.rcmBody table[class=mcnImageCardRightTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnImageCardLeftImageContent],#messagebody div.rcmBody td[class=mcnImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent],#messagebody div.rcmBody table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent]{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnBoxedTextContentColumn]{
			padding-left:18px !important;
			padding-right:18px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=columnsContainer]{
			display:block !important;
			max-width:600px !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=mcnTextContent]{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[id=templateContainer],#messagebody div.rcmBody table[id=templatePreheader],#messagebody div.rcmBody table[id=templateHeader],#messagebody div.rcmBody table[id=templateColumns],#messagebody div.rcmBody table[class=templateColumn],#messagebody div.rcmBody table[id=templateBody],#messagebody div.rcmBody table[id=templateFooter]{
			max-width:600px !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody h1{
			font-size:24px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody h2{
			font-size:20px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody h3{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody h4{
			font-size:16px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody table[id=templatePreheader]{
			display:block !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=preheaderContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=preheaderContainer] td[class=mcnTextContent] p{
			font-size:14px !important;
			line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=headerContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=headerContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=bodyContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=bodyContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=leftColumnContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=leftColumnContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=centerColumnContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=centerColumnContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=rightColumnContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=rightColumnContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=footerContainer] td[class=mcnTextContent],#messagebody div.rcmBody td[class=footerContainer] td[class=mcnTextContent] p{
			font-size:14px !important;
			line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		#messagebody div.rcmBody td[class=footerContainer] a[class=utilityLink]{
			display:block !important;
		}

}
</style>

</head>
<body>
<div id="messagebody"><div class="message-htmlpart">
<div class="rcmBody" marginwidth="0" marginheight="0" style="margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #756d6d; height: 100% !important; width: 100% !important">
<center>
<table id="bodyTable" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0; padding: 0; background-color: #756d6d; height: 100% !important; width: 100% !important" align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
<tbody><tr>
<td id="bodyCell" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0; padding: 20px; border-top: 0px; height: 100% !important; width: 100% !important" align="center" valign="top">
                       
					   <!-- node type 8 -->
<table id="templateContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
                                   
								   <!-- node type 8 -->
<table id="templatePreheader" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FFFFFF; border-top: 0px; border-bottom: 0px" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td class="preheaderContainer" style="padding-top: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top"><table class="mcnTextBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnTextBlockOuter">
<tr>
<td class="mcnTextBlockInner" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">
<table class="mcnTextContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="366">
<tbody><tr>
 <td class="mcnTextContent" style="padding: 9px 0px 9px 18px; font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; font-weight: normal; text-align: left; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; line-height: 125%" valign="top">
Your friend <span style="font-weight:bold;"><?php echo $user_name;?></span> wants you to join their workout!
</td>
</tr>
</tbody></table>
<table class="mcnTextContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="right" border="0" cellpadding="0" cellspacing="0" width="197">
<tbody><tr>
<td class="mcnTextContent" style="padding: 9px 18px 9px 0px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; font-family: Helvetica; font-size: 11px; line-height: 125%; text-align: left" valign="top">

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody></table>
                                    <!-- node type 8 -->
</td>
</tr>
<tr>
<td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
                                    
									<!-- node type 8 -->
<table id="templateHeader" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FFFFFF; border-top: 10px ridge; border-bottom: 10px ridge" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td class="headerContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top"><table class="mcnImageBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnImageBlockOuter">
<tr>
<td style="padding: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" class="mcnImageBlockInner" valign="top">
<table class="mcnImageContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="mcnImageContent" style="padding-right: 9px; padding-left: 9px; padding-top: 0px; padding-bottom: 0px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">
<img alt="" src="http://groupxnow.com/test/trilakes/mail/images/groupxlogo.png" style="max-width: 93px; padding-bottom: 0px; display: inline !important; vertical-align: bottom; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic" class="mcnImage" align="left" width="93">
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody></table>
                                    <!-- node type 8 -->
</td>
</tr>
<tr>
<td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
                                    <!-- node type 8 -->
<table id="templateBody" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FFFFFF; border-top: 0px; border-bottom: 0px" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td class="bodyContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top"><table class="mcnTextBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnTextBlockOuter">
<tr>
<td class="mcnTextBlockInner" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">
<table class="mcnTextContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td class="mcnTextContent" style="padding: 9px 18px; font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 28px; font-weight: normal; text-align: left; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; line-height: 150%" valign="top">Your friend <span style="font-weight:bold;">
<?php echo $user_name;?></span> has invited you to join their next workout:<br>
Class Name: <span> <?php echo $className; ?></span>
<br>Class Instructor: <span><?php echo $instructor;?></span>
<br>Time: <?php echo $startDate; ?>, <?php echo $startTime; ?>
<br><strong><em>Location: Tri-lakes YMCA</em></strong><br></br> <p style="font-size:10px; color:#000">Click the date link to add to your calendar</p>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table><table class="mcnFollowBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnFollowBlockOuter">
<tr>
<td style="padding: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" class="mcnFollowBlockInner" align="center" valign="top">
<table class="mcnFollowContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td style="padding-left: 9px; padding-right: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center">
<table style="background-color: #CCCCCC; border: 1px solid #EEEEEE; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" class="mcnFollowContent" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td style="padding-top: 9px; padding-right: 9px; padding-left: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<table style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">
<table class="mcnFollowStacked" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="mcnFollowIconContent" style="padding-right: 10px; padding-bottom: 5px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a href="https://www.facebook.com/GroupxOndemand" style="word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" target="_blank" rel="noreferrer">
<img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-96.png" alt="Facebook" class="mcnFollowBlockIcon" style="width: 48px; max-width: 48px; display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic" width="48"></a>
</td>
</tr>
<tr>
<td class="mcnFollowTextContent" style="padding-right: 10px; padding-bottom: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a style="color: #606060; font-family: Arial; font-size: 11px; font-weight: normal; line-height: 100%; text-align: center; text-decoration: none; word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" href="https://www.facebook.com/GroupxOndemand" target="_blank" rel="noreferrer">Facebook</a>
</td>
</tr>
</tbody></table>

						<!-- node type 8 -->
<table class="mcnFollowStacked" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="mcnFollowIconContent" style="padding-right: 10px; padding-bottom: 5px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a href="https://twitter.com/groupxondemand" style="word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" target="_blank" rel="noreferrer">
<img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-twitter-96.png" alt="Twitter" class="mcnFollowBlockIcon" style="width: 48px; max-width: 48px; display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic" width="48"></a>
</td>
</tr>
<tr>
<td class="mcnFollowTextContent" style="padding-right: 10px; padding-bottom: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a style="color: #606060; font-family: Arial; font-size: 11px; font-weight: normal; line-height: 100%; text-align: center; text-decoration: none; word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" href="https://twitter.com/groupxondemand" target="_blank" rel="noreferrer">Twitter</a>
</td>
</tr>
</tbody></table>


								<!-- node type 8 -->
<table class="mcnFollowStacked" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="mcnFollowIconContent" style="padding-right: 10px; padding-bottom: 5px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a href="http://www.groupxondemand/" style="word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" target="_blank" rel="noreferrer">
<img src="http://groupxnow.com/test/trilakes/mail/images/groupxlogo.png" alt="Website" class="mcnFollowBlockIcon" style="width: 48px; max-width: 48px; display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic" width="48"></a>
</td>
</tr>
<tr>
<td class="mcnFollowTextContent" style="padding-right: 10px; padding-bottom: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a style="color: #606060; font-family: Arial; font-size: 11px; font-weight: normal; line-height: 100%; text-align: center; text-decoration: none; word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" href="http://www.groupxondemand/" target="_blank" rel="noreferrer">Website</a>
</td>
</tr>
</tbody></table>


								<!-- node type 8 -->
<table class="mcnFollowStacked" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="mcnFollowIconContent" style="padding-right: 10px; padding-bottom: 5px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a href="http://plus.google.com/" style="word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" target="_blank" rel="noreferrer">
<img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-googleplus-96.png" alt="Google Plus" class="mcnFollowBlockIcon" style="width: 48px; max-width: 48px; display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic" width="48"></a>
</td>
</tr>
<tr>
<td class="mcnFollowTextContent" style="padding-right: 10px; padding-bottom: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a style="color: #606060; font-family: Arial; font-size: 11px; font-weight: normal; line-height: 100%; text-align: center; text-decoration: none; word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" href="http://plus.google.com/" target="_blank" rel="noreferrer">Google Plus</a>
</td>
</tr>
</tbody></table>


								<!-- node type 8 -->
<table class="mcnFollowStacked" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="mcnFollowIconContent" style="padding-right: 0px; padding-bottom: 5px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a href="http://www.youtube.com/" style="word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" target="_blank" rel="noreferrer">
<img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-youtube-96.png" alt="YouTube" class="mcnFollowBlockIcon" style="width: 48px; max-width: 48px; display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic" width="48"></a>
</td>
</tr>
<tr>
<td class="mcnFollowTextContent" style="padding-right: 0px; padding-bottom: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
<a style="color: #606060; font-family: Arial; font-size: 11px; font-weight: normal; line-height: 100%; text-align: center; text-decoration: none; word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" href="http://www.youtube.com/" target="_blank" rel="noreferrer">YouTube</a>
</td>
</tr>
</tbody></table>


								<!-- node type 8 -->
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody></table>
                                    <!-- node type 8 -->
</td>
</tr>
<tr>
<td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
                                    <!-- node type 8 -->
<table id="templateColumns" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FFFFFF; border-top: 0px; border-bottom: 0px" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td class="columnsContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" valign="top" width="33%">
<table class="templateColumn" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="leftColumnContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top"><table class="mcnCaptionBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnCaptionBlockOuter">
<tr>
<td class="mcnCaptionBlockInner" style="padding: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">


<table class="mcnCaptionBottomContent" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="false">
<tbody><tr>
<td class="mcnCaptionBottomImageContent" style="padding: 0 9px 9px 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" valign="top">
<img alt="" src="http://groupxnow.com/test/trilakes/mail/images/fittip.png" style="max-width: 164px; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; vertical-align: bottom" class="mcnImage" width="120">
</td>
</tr>
<tr>
<td class="mcnTextContent" style="padding: 0px 9px; font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; text-align: left; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; line-height: 150%" valign="top" width="164">
            Fit Tip:<br>
Drink at least 1/2 of your weight in OZs of water to stay hydrated!
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody></table>
</td>
<td class="columnsContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" valign="top" width="33%">
<table class="templateColumn" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="centerColumnContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top"><table class="mcnCaptionBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnCaptionBlockOuter">
<tr>
<td class="mcnCaptionBlockInner" style="padding: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">


<table class="mcnCaptionBottomContent" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="false">
<tbody><tr>
<td class="mcnCaptionBottomImageContent" style="padding: 0 9px 9px 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" valign="top">
<img alt="" src="http://groupxnow.com/test/trilakes/mail/images/comingsoon.png" style="max-width: 164px; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; vertical-align: bottom" class="mcnImage" width="120">
</td>
</tr>
<tr>
<td class="mcnTextContent" style="padding: 0px 9px; font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; text-align: left; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; line-height: 150%" valign="top" width="164">
<p style="margin: 1em 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; font-family: Helvetica; font-size: 15px; line-height: 150%; text-align: left">Coming Soon!!!, Cafe Bistro<p>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody></table>
</td>
<td class="columnsContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" valign="top" width="33%">
<table class="templateColumn" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="rightColumnContainer" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top"><table class="mcnCaptionBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnCaptionBlockOuter">
<tr>
<td class="mcnCaptionBlockInner" style="padding: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">


<table class="mcnCaptionBottomContent" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="false">
<tbody><tr>
<td class="mcnCaptionBottomImageContent" style="padding: 0 9px 9px 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" valign="top">
<img alt="" src="http://groupxnow.com/test/trilakes/mail/images/bootcamp.jpg" style="max-width: 408px; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; vertical-align: bottom" class="mcnImage" width="120">
</td>
</tr>
<tr>
<td class="mcnTextContent" style="padding: 0px 9px; font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; text-align: left; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; line-height: 150%" valign="top" width="164">
            Have you tried Bootcamp?<br>
It is built on three fundamentals; cardio, strength and agility!
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
                                    <!-- node type 8 -->
</td>
</tr>
<tr>
<td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="center" valign="top">
                                    <!-- node type 8 -->
<table id="templateFooter" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #FFFFFF; border-top: 0px; border-bottom: 0px" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td class="footerContainer" style="padding-bottom: 9px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top"><table class="mcnTextBlock" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody class="mcnTextBlockOuter">
<tr>
<td class="mcnTextBlockInner" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" valign="top">
<table class="mcnTextContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%" align="left" border="0" cellpadding="0" cellspacing="0" width="600">
<tbody><tr>
<td class="mcnTextContent" style="padding: 9px 18px; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #606060; font-family: Helvetica; font-size: 11px; line-height: 125%; text-align: left" valign="top">
<em>Copyright © 2014 GroupX onDemand All rights reserved.</em><br>
<br>
<br>
<strong>Our mailing address is:</strong><br>
1213 Rosedale Street<br>
Castle Rock, CO. 80104<br>
<br>
<br>
&nbsp;
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody></table>
                                    <!-- node type 8 -->
</td>
</tr>
</tbody></table>
                        <!-- node type 8 -->
</td>
</tr>
</tbody></table>
</center>
</div>
</div>
</div>

</div>
</div>

</div><!-- end mailview-right -->
	
</body>
</html>