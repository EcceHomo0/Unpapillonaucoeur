<%EnableSessionState=False
host = Request.ServerVariables("HTTP_HOST")

if host = "unpapillonaucoeur.com" or host = "www.unpapillonaucoeur.com" then response.redirect("https://www.unpapillonaucoeur.com/accueil")

else
response.redirect("https://www.unpapillonaucoeur.com/error.htm")
end if
%>