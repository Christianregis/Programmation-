import java.util.Scanner;

public class Jour_Mois_Annee { 
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int jour1,mois1,annee1;
        int jour2,mois2,annee2;
        int jour_jour=0;
        int jour_mois=0;
        int jour_annee=0;
        int jour_total=0;
/*Entrez les donnees pour le calcul */
        System.out.print("Entrez la date de l'annee 1\n1.Jour 1\t");
        jour1=scanner.nextInt();
        System.out.println();

        System.out.print("2.Mois 1\t");
        mois1=scanner.nextInt();
        System.out.println();

        System.out.print("Entrez l'annee 1\t");
        annee1=scanner.nextInt();
        System.out.println();

        System.out.print("Entrez la date de l'annee 2\n1.Jour 2\t");
        jour2=scanner.nextInt();
        System.out.println();

        System.out.print("2.Mois 2\t");
        mois2=scanner.nextInt();
        System.out.println();

        System.out.print("Entrez l'annee 2\t");
        annee2=scanner.nextInt();
        System.out.println();
/*Resultat si les annees sont diffrentes */
        if (annee1!=annee2) {
            if (annee1<annee2) {
                int temp1=annee1;
                annee1=annee2;
                annee2=temp1;
            }
            for(int i=annee2+1;i<=(annee1);i++){
                if (i%400==0 && i%100==0) {
                    jour_annee=jour_annee+366;
                }
                else{
                    jour_annee=jour_annee+365;
                }
            }
            if (mois1!=mois2) {
                if (mois1==1||mois1==3||mois1==5||mois1==7||mois1==10||mois1==12) {
                    int nbre_jour=31;
                    jour_jour=jour_jour+nbre_jour-jour1;
                }
                else if (mois1==4||mois1==6||mois1==9||mois1==11) {
                    int nbre_jour=30;
                    jour_jour=jour_jour+nbre_jour-jour1;
                }
                else if (mois1==2) {
                    jour_jour=jour_jour+28-jour1;
                }
                else{
                    System.out.println("Error !");
                }
                jour_jour=jour2+jour_jour;
            }
            else{
                jour_jour=Math.abs(jour1-jour2);
            }
    
            if (mois1!=mois2) {
                if (mois1<mois2) {
                    int temp=mois2;
                    mois2=mois1;
                    mois1=temp;
                }
                for(int i=mois2+1;i<(mois1);i++){
                    if (i==1||i==3||i==5||i==7||i==10||i==12) {
                        int nbre_jour=31;
                        jour_mois=i+nbre_jour;
                    }
                    else if (i==4||i==6||i==9||i==11) {
                        int nbre_jour=30;
                        jour_mois=jour_mois+nbre_jour;
                    }
                    else if (i==2) {
                        jour_mois=jour_mois+28;
                    }
                }
    
            }

            jour_total=jour_annee+jour_jour+jour_mois;

            System.out.println("L'ecart est de "+jour_total+" Jours");
        }
/*Resultat si les annees sont egales */
        else{
            if (mois1!=mois2) {
                if (mois1==1||mois1==3||mois1==5||mois1==7||mois1==10||mois1==12) {
                    int nbre_jour=31;
                    jour_jour=jour_jour+nbre_jour-jour1;
                }
                else if (mois1==4||mois1==6||mois1==9||mois1==11) {
                    int nbre_jour=30;
                    jour_jour=jour_jour+nbre_jour-jour1;
                }
                else if (mois1==2) {
                    jour_jour=jour_jour+28-jour1;
                }
                else{
                    System.out.println("Error !");
                }
                jour_jour=jour2+jour_jour;
            }
            else{
                jour_jour=Math.abs(jour1-jour2);
            }
    
            if (mois1!=mois2) {
                if (mois1<mois2) {
                    int temp=mois2;
                    mois2=mois1;
                    mois1=temp;
                }
                for(int i=mois2+1;i<(mois1);i++){
                    if (i==1||i==3||i==5||i==7||i==10||i==12) {
                        int nbre_jour=31;
                        jour_mois=i+nbre_jour;
                    }
                    else if (i==4||i==6||i==9||i==11) {
                        int nbre_jour=30;
                        jour_mois=jour_mois+nbre_jour;
                    }
                    else if (i==2) {
                        jour_mois=jour_mois+28;
                    }
                }
    
            }
            jour_total=jour_jour+jour_mois;

            System.out.println("L'ecart est de "+jour_total+" Jours");
        }
        scanner.close();
    }
}