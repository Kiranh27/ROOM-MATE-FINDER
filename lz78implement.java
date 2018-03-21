import java.util.Scanner;
import java.util.*;
public class lz78implement
{
	public static void main(String args[])
	{
		Scanner sc = new Scanner(System.in);
                ArrayList a1 = new ArrayList();
                ArrayList a11 = new ArrayList();
                ArrayList a12 = new ArrayList();
                ArrayList a13 = new ArrayList();
                ArrayList a14 = new ArrayList();
                ArrayList a15 = new ArrayList();
                ArrayList a16 = new ArrayList();
                ArrayList a17 = new ArrayList();
                ArrayList a18 = new ArrayList();
                ArrayList a19 = new ArrayList();
                ArrayList a20 = new ArrayList();
                ArrayList a21 = new ArrayList();
                ArrayList a22 = new ArrayList();
                
		String temp;
		String steps;
		int i;
		char c = '\0';
		String symbols = " ";
		String Tokens;
		System.out.println("enter a string");
                temp = sc.nextLine();
                char l1;
                char o = temp.charAt(0);
		char s = temp.charAt(1);
		char b = temp.charAt(2);
		char k = temp.charAt(3);
		char f = temp.charAt(4);
                char j = temp.charAt(5);
                char m = temp.charAt(6);
                char n = temp.charAt(7);
                char a = temp.charAt(8);
                char a2 = temp.charAt(9);
                char a3 = temp.charAt(10);
                char a4 = temp.charAt(11);
                char a5 = temp.charAt(12);
                char a6 = temp.charAt(13);
                char a7 = temp.charAt(14);
               char a8 = temp.charAt(15);
                char a9 = temp.charAt(16);
                char a10 = temp.charAt(17);
                char a111 = temp.charAt(18);
                char a122 = temp.charAt(19);
                 char a133 = temp.charAt(20);
                 char a144 = temp.charAt(21);
                 char a155 = temp.charAt(22);
                 char a166 = temp.charAt(23);
			if(c == '\0')
			{
				System.out.println("0,"+o);
                                a1.add(o);
			}
                      
			if(a1.contains(s))
			{
			
				System.out.println("1,"+s);
                                
				a11.add(s);
                                a11.add(b);
                                if(k == o)
                                {
                                System.out.println("1,"+k);
                                a12.add(k);
                                a12.add(f);
                                }
                                if(k == 's'+'b')
                                {
                                System.out.println("2,"+k);
                                a12.add(k);
                                a12.add(f);
                                }
                                else
                                {
                                System.out.println("0,"+k);
                                a12.add(k);
                                }
                                if(f == o)
                                {
                                System.out.println("1,"+f);
                                a13.add(f);
                                a13.add(j);
                                }
                                 if(f == 's'+'b')
                                {
                                System.out.println("2,"+f);
                                a13.add(f);
                                a13.add(j);
                                }
                                if(f == 'k'+'f')
                                {
                                System.out.println("3,"+f);
                                a13.add(f);
                                a13.add(j);
                                }
                                 if(f == k)
                                {
                                System.out.println("3,"+f);
                                a13.add(f);
                                a13.add(j);
                                }
                                else
                                {
                                System.out.println("0,"+f);
                                a13.add(f);
                                }
                                 if(j == o)
                                {
                                System.out.println("1,"+j);
                                a14.add(j);
                                a14.add(m);
                                }
                                 if(j == 's'+'b')
                                {
                                System.out.println("2,"+j);
                                a14.add(j);
                                a14.add(m);
                                }
                                 if(j == k)
                                {
                                System.out.println("3,"+j);
                                a14.add(j);
                                a14.add(m);
                                }
                                if(j == f)
                                {
                                System.out.println("4,"+j);
                                a14.add(j);
                                a14.add(m);
                                }
                                if(j == 'k'+'f')
                                {
                                System.out.println("3,"+j);
                                a14.add(m);
                                }
                                else
                                {
                                System.out.println("0,"+j);
                                a14.add(j);
                                }
                                if(m == o)
                                {
                                System.out.println("1,"+m);
                                a15.add(m);
                                a15.add(n);
                                }
                                 if(m == 's'+'b')
                                {
                                System.out.println("2,"+m);
                                a15.add(m);
                                a15.add(n);
                                }
                                 if(m == k)
                                {
                                System.out.println("3,"+m);
                                a15.add(m);
                                a15.add(n);
                                }
                                 if(m == f)
                                {
                                System.out.println("4,"+m);
                                a15.add(m);
                                a15.add(n);
                                }
                                if(m == j)
                                {
                                System.out.println("5,"+m);
                                a15.add(m);
                                a15.add(n);
                                }
                                if(m == 'k'+'f')
                                {
                                System.out.println("3,"+m);
                                a15.add(m);
                                a15.add(n);
                                }
                                if(m == 'f'+'j')
                                { 
                                System.out.println("4,"+m);
                                a15.add(m);
                                a15.add(n);
                                }
                                          
                                else
                                {
                                System.out.println("0,"+m);
                                } 
                                 if(n == o)
                                {
                                System.out.println("1,"+n);
                                a16.add(m);
                                a16.add(a);
                                }
                                 if(n == 's'+'b')
                                {
                                System.out.println("2,"+n);
                                a16.add(n);
                                a16.add(a);
                                }
                                 if(n == k)
                                {
                                System.out.println("3,"+n);
                                a16.add(n);
                                a16.add(a);
                                }
                                 if(n == f)
                                {
                                System.out.println("4,"+n);
                                a16.add(n);
                                a16.add(a);
                                }
                                if(n == 'k'+'f')
                                {
                                System.out.println("3,"+n);
                                a16.add(n);
                                a16.add(a);
                                }
                                if(n == 'j'+'m')
                                {
                                System.out.println("4,"+n);
                                a16.add(n);
                                a16.add(a);
                        
                                }
                                else
                                {
                                System.out.println("0,"+n);
                                a16.add(n);
                                }
                                if(a == o)
                                {
                                System.out.println("0,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                if(a == 's'+'b')
                                {
                                System.out.println("2,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                if(a == k)
                                {
                                System.out.println("3,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                if(a == f)
                                {
                                System.out.println("4,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                if(a == j)
                                {
                                System.out.println("5,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                
                                if(a == m)
                                {
                                System.out.println("6,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                if(a == n)
                                {
                                System.out.println("7,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                if(a == 'k'+'f')
                                {
                                System.out.println("3,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                if(a == 'j'+'m')
                                {
                                System.out.println("4,"+a);
                                a17.add(a);
                                a17.add(a1);
                                }
                                else
                                {
                                System.out.println("0,"+a);
                                a17.add(a);
                                }
                                if(a2 == o)
                                {
                                System.out.println("1,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == s)
                                {
                                System.out.println("2,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == b)
                                {
                                System.out.println("3,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == 's'+'b')
                                {
                                System.out.println("2,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == k)
                                {
                                System.out.println("3,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == f)
                                {
                                System.out.println("4,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == 'k'+'f')
                                {
                                System.out.println("3,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == j)
                                {
                                System.out.println("5,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == m)
                                {
                                System.out.println("6,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == 'j'+'m')
                                {
                                System.out.println("4,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == n)
                                {
                                System.out.println("7,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == a)
                                {
                                System.out.println("8,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                                if(a2 == 'n'+'a')
                                {
                                System.out.println("5,"+a1); 
                                a18.add(a1);
                                a18.add(a2);
                                }
                         
                         
                                

                                
                         }

                         
                         
                                


                        
                        else
			{       
                                System.out.println("0,"+s);
                                a11.add(s);
                                if(b == o)
                                {
                                 }
                                 else
                                 {
                                 System.out.println("0,"+b);
                                 a12.add(b);
                                 }
                                
                                
				if(k == o)
                                {
                                System.out.println("1,"+k);
                                a13.add(k);
                                a13.add(f);
                                }
                                if(k == s)
                                {
                                System.out.println("2,"+k);
                                a13.add(k);
                                a13.add(f);
                                }
                                if(k == b)
                                {
                                System.out.println("3,"+k);
                                a13.add(k);
                                a13.add(f);
                                }
                                else
                                {
                                System.out.println("0,"+k);
                                a13.add(k);
                                }
                                if(f == o)
                                {
                                System.out.println("1,"+j);
                                a14.add(f);
                                a14.add(j);
                                   if(m == o)
                                   {
                                   }
                                   else
                                   {
                                   System.out.println("0,"+m);
                                   a15.add(m);
                                   }
                                   if(n == o && a == s)
                                   {
                                   System.out.println("5,"+a2);
                                   a16.add(o);
                                   a16.add(s);
                                   a16.add(a2);
                                   }
                                   
                                   if(a3 == o && a4 == s)
                                   {
                                   System.out.println("5,"+a5);
                                   a17.add(o);
                                   a17.add(s);
                                   a17.add(a5);
                                   }
                                   if(a6 == k)
                                   {
                                   System.out.println("4,"+a7);
                                   a18.add(a6);
                                   a18.add(a7);
                                   }
                                   if(a8 == o && a9 == s)
                                   {
                                   System.out.println("5,"+a10);
                                   a19.add(a8);
                                   a19.add(a9);
                                   a19.add(a10);
                                   }
                                   if(a111 == b)
                                   {
                                   System.out.println("3,"+a122);
                                   }
                                   if(a133 == o)
                                   {
                                   }
                                   else
                                   {
                                    System.out.println("0,"+a133);
                                    }
                                    if(a144 == o)
                                    {
                                    }
                                    else
                                    {
                                     System.out.println("gggg");
                                     }
                                }
                               }
                                
		        }                   
                        }