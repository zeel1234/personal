import java.util.Scanner;
interface Practical
{
	void getPracMarks();
}
interface External extends Practical
{
	void getExtMarks();
	void getTw();
}
class Sessional
{
	public static int subjects;
	float smarks[][];
	public static Scanner sc =new Scanner(System.in);

	public Sessional()
	{
		smarks=new float[3][subjects];

	}
	public void getMarks(int ses)
	{

		for(int i=0;i<subjects;i++)
		{
			System.out.print("Enter subject "+i+"marks of sessional"+ses+" : ");
			smarks[ses-1][i]=sc.nextFloat();
		}
	}
	public void showMarks(int rollno,int ses)
	{
		System.out.println("Rollno : "+rollno);
		for(int i=0;i<subjects;i++)
		{
			System.out.println("Subject : "+i+" : "+smarks[ses-1][i]);
		}
	}
	public float[] getTotal()
	{
		float total[]=new float[subjects] ;
		for(int i=0;i<subjects;i++)
		{

			total[i]=smarks[0][i]+smarks[1][i]+smarks[2][i];
		}
		return total;

	}
}
class Result extends Sessional implements External
{

	float emarks[];
	float twmarks[];
	float pmarks[];
	public Result()
	{
		emarks=new float[subjects];
		twmarks=new float[subjects];
		pmarks=new float[subjects];
	}
	public void getTw()
	{
		for(int i=0;i<subjects;i++)
		{
					System.out.print("Enter subject "+i+"marks : of termwork");
					twmarks[i]=sc.nextFloat();
		}
	}
	public void getExtMarks()
	{
			for(int i=0;i<subjects;i++)
			{
						System.out.print("Enter subject "+i+"marks : of Extenal");
						emarks[i]=sc.nextFloat();
			}
	}
	public void getPracMarks()
	{
				for(int i=0;i<subjects;i++)
				{
							System.out.print("Enter subject "+i+"marks : of practical");
							pmarks[i]=sc.nextFloat();
				}
	}
	public void showfinalResult(int rollno )
	{
		float ses[]=getTotal();
		System.out.println("Rollno " + rollno);
		System.out.println("      \tSessional\tTermwork\tPractical\tcternal");

		for(int i=0;i<subjects;i++)
		{
			System.out.println("subject"+i+"\t"+ses[i]/3+"\t"+twmarks[i]+"\t"+pmarks[i]+"\t"+emarks[i]);
		}
	}

}
class ResultDemo
{

	public static void main(String ar[])
	{
		Scanner sc = new Scanner(System.in);
		System.out.print("Total number of subject : ");
		Sessional.subjects=sc.nextInt();
		System.out.print("Enter total number of student : ");
		int totalstudents=sc.nextInt();
		Result students[]=new Result[totalstudents];
		for(int i=0;i<totalstudents;i++)
			students[i]=new Result();
		while(true)
		{
			System.out.println("-----------Menu-----------");
			System.out.println("1.Sessionla marks");
			System.out.println("2.Termwork marks");
			System.out.println("3.Practical marks");
			System.out.println("4.External Exammarks");
			System.out.println("5.Show Final Result : ");
			System.out.println("6.exit");
			System.out.print("Enter choice : ");
			int ch=sc.nextInt();
			int rollno;
			switch(ch)
			{
				case 1:
					System.out.print("Enter rollno : ");
					rollno=sc.nextInt();
					System.out.print("Enter sessional number  :");
					int sesno=sc.nextInt();
					students[rollno-1].getMarks(sesno);
					students[rollno-1].showMarks(rollno,sesno);
					break;
				case 2:
					System.out.print("Enter rollno : ");
					rollno=sc.nextInt();
					students[rollno-1].getTw();
					break;
				case 3:
					System.out.print("Enter rollno : ");
					rollno=sc.nextInt();
					students[rollno-1].getPracMarks();
					break;
				case 4:
					System.out.print("Enter rollno : ");
					rollno=sc.nextInt();
					students[rollno-1].getExtMarks();
					break;
				case 5 :
					System.out.print("Enter rollno : ");
					rollno=sc.nextInt();
					students[rollno-1].showfinalResult(rollno);
					break;
				case 6:
					System.exit(0);
					break;
				default:
					System.out.println("Invalid choice ");
					break;

			}
		}

	}
}
