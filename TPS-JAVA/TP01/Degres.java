import java.util.Scanner;
public class Degres {
    public static void main(String[] args) {
        double temp_f,tempC;
        Scanner scanner=new Scanner(System.in);
        System.out.println("Donnez une temperature en Fahrenheit : \t");
        temp_f=scanner.nextDouble();
        tempC=(5*(temp_f-32)/9);
        System.out.println("Cette temperature correspond a "+tempC+" degres Celcuis");
        scanner.close();
    }
}