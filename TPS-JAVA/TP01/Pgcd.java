import java.util.Scanner;
public class Pgcd{
	public static void main(String[] args){
		Scanner scanner=new Scanner(System.in);
		int a,b,r;
		System.out.println("Entrez un nombre entier");
		a=scanner.nextInt();
		System.out.println("Entrez un deuxieme nombre entier");
		b=scanner.nextInt();
		while (b!=0) {
			r=a%b;
			a=b;
			b=r;
		}
		System.out.println("Le PGCD est "+a);
		scanner.close();
	}
}