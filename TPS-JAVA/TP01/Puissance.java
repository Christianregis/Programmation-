import java.util.Scanner;

public class Puissance {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int nombre,puissance;
        System.out.println("Entrez un nombrer entier");
        nombre=scanner.nextInt();
        System.out.println("Entrez la valeur de puissance");
        puissance=scanner.nextInt();

        if (puissance==0) {
            System.out.println(nombre+" a la puissance "+puissance+" est egale a 1");
        }
        else if (puissance<0) {
            System.out.println("La valeur de la puissance doit etre positive !");
        }
        else{
        int d=nombre;
        for(int i=2;i<=puissance;i++){
            nombre=nombre*d;
        }
        System.out.println(d+" a la puissance "+puissance+" est egale a "+nombre);
    }
        scanner.close();
    }
}
