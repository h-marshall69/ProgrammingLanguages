<%@page import="pentavocalica.Pentavocalica"%>
<%@page contentType= "text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<% pentavocalica.Pentavocalica p1;
   pentavocalica.Pentavocalica p2;
   pentavocalica.Pentavocalica p3;
   pentavocalica.Pentavocalica p4;  
%>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Determinar si es o no una palabra pentavocálica</title>
	</head>
	<body>
		<h1>Pentavocálica</h1>
		<% p1 = new Pentavocalica("albaricoque");
			p2 = new Pentavocalica("seculariza");
			p3 = new Pentavocalica("");
			p3.setCadena("peliagudo");
			p4 = new Pentavocalica("");
			p4.setCadena("abacadabra");

		if (p1.esPentavocalica (p1.getCadena ()) == true) { %>
			<%= "SI <br>" %>
		<% } else { %>
			<%= "NO <br>" %>
		<%}
		
		if (p2.esPentavocalica (p2.getCadena ()) == true) { %>
			<%= "SI <br>" %>
		<% } else { %>
			<%= "NO <br>" %>
		<%}
		
		if (p3.esPentavocalica (p3.getCadena ()) == true) { %>
			<%= "SI <br>" %>
		<% } else { %>
			<%= "NO <br>" %>
		<%}
		
		if (p4.esPentavocalica (p4.getCadena ()) == true) { %>
			<%= "SI <br>" %>
		<% } else { %>
			<%= "NO <br>" %>
		<%} %>
	</body>
</html>

		