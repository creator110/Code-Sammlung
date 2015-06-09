 Sub sendMail()
        Dim myMail As New MailMessage()
        myMail.From = "absender@aa.de"
        myMail.To = "empfaenger@ee.de"
        myMail.Subject = "Test-Mail-001"
        myMail.Priority = MailPriority.Normal
        myMail.BodyFormat = MailFormat.Html
        myMail.Body = "<html><body>Test-Mail-001 - Erfolgreich</body></html>"
        Dim myAttachments As New MailAttachment("c:\test\mail\testmail.txt", MailEncoding.Base64)
        myMail.Attachments.Add(myAttachments)
        SmtpMail.SmtpServer = "myMailServer"
        SmtpMail.Send(myMail)
    End Sub
