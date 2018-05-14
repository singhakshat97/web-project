<%-- 
    Document   : fetch
    Created on : 15 Apr, 2017, 5:40:10 PM
    Author     : Kunal Bhargava
--%>

<%@page import="java.sql.*"%>
<table>
<%
Connection con = null;
String url = "jdbc:mysql://localhost:3306/";
String db = "dbloodbank";
String driver = "com.mysql.jdbc.Driver";
String userName ="root";
String password="root";

//int sumcount=0;
Statement st;
try{
Class.forName(driver).newInstance();
con = DriverManager.getConnection(url+db,userName,password);
String userid = request.getParameter("uname");    
String pwd = request.getParameter("pass");
String query = "select * from abhi where uname='" + userid + "' and pass='" + pwd + "'";
st = con.createStatement();
ResultSet rs = st.executeQuery(query);

if(!rs.next())
{
    response.sendRedirect("fail.jsp");
}
else
{
    response.sendRedirect("welcome.jsp");
}
}
catch(Exception e){
e.printStackTrace();
}
%>