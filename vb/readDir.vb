Sub readDir()

  Dim tmpDoc As String
  
  For Each item as String in IO.Directory.GetFiles("c:\test")
  
    tmpDoc = IO.Path.GetFileName(item)
    '
    ' mach was mit tmpDoc
    '
  Next
End Sub 
