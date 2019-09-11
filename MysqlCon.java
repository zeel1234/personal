import java.sql.*;
class MysqlCon{
public static void main(String args[]){
try{
Class.forName("com.mysql.jdbc.Driver");
Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3308/student","root","");
Statement stmt=con.createStatement();
System.out.println("Db SSuccesful");
ResultSet rs=stmt.executeQuery("select * from student_detail");
//System.out.println(rs.getString(2));
while(rs.next())
	System.out.println(rs.getInt(1)+"  "+rs.getString(2)+"  "+rs.getString(3)+"  "+rs.getString(4)+"  "+rs.getString(5)+"  "+rs.getString(6)+"  "+rs.getInt(7));

con.close();
}catch(Exception e){ System.out.println(e);}
}



}
