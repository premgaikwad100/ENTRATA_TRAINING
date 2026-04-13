import java.net.*; public class MyNetwork
 { public static void main(String args[]) throws UnknownHostException 
 { InetAddress ip  = InetAddress.getByName("www.google.com"); 
System.out.println(ip);
 }
 }