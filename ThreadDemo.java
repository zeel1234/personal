import java.util.*;

class NewThread1 extends Thread
{
	 private String threadName;
	   NewThread1( String name)
	  {
	       threadName = name;
	       System.out.println("Creating " +  threadName );
   	  }
	public void run()
	{
		 try
		 {
			 System.out.println("Thread 1 Running ");
			for(int i=0;i<=5;i++)
			{
					System.out.println("From Thread 1 "+i);
					Thread.sleep(1000);

			}
		  }

		catch (InterruptedException e)
		{
	         System.out.println("Thread " +  threadName + " interrupted.");
	    }
	    System.out.println("Thread " +  threadName + " exiting.");
   }




}


class NewThread2 extends Thread
{
	 private String threadName;
	   NewThread2( String name)
	  {
	       threadName = name;
	       System.out.println("Creating " +  threadName );
   	  }
	public void run()
	{
		System.out.println("Thread 2 Running ");
		 try
		 {
			for(int i=0;i<=6;i++)
			{
					System.out.println(" From Thread 2 " +i);
					Thread.sleep(2000);

			}
		  }

		catch (InterruptedException e)
		{
	         System.out.println("Thread " +  threadName + " interrupted.");
	    }
	    System.out.println("Thread " +  threadName + " exiting.");
   }



}

class NewThread3 extends Thread
{
	 private String threadName;
	   NewThread3( String name)
	  {
	       threadName = name;
	       System.out.println("Creating " +  threadName );
   	  }
	public void run()
	{
		System.out.println("Thread 3 Running ");
		 try
		 {
			for(int i=0;i<=7;i++)
			{
					System.out.println("From thread 3 "+i);
					Thread.sleep(3000);

			}
		  }

		catch (InterruptedException e)
		{
	         System.out.println("Thread " +  threadName + " interrupted.");
	    }
	    System.out.println("Thread " +  threadName + " exiting.");
   }



}

class ThreadDemo {

   public static void main(String args[]) {
       NewThread1 T1 = new NewThread1("Thread-1");
       //T1.setPriority(Thread.MIN_PRIORITY);
		System.out.println("t1 thread priority : " + T1.getPriority());
        T1.setPriority(2);
       T1.start();

	   NewThread2 T2 = new NewThread2( "Thread-2");
	  System.out.println("t2 thread priority : " + T2.getPriority());
        T2.setPriority(8);
	   // System.out.println("Thread 2 Starting");

       T2.start();


      NewThread3 T3 = new NewThread3( "Thread-3");
   System.out.println("t2 thread priority : " + T3.getPriority());
        T3.setPriority(4);
       T3.start();
       System.out.println(T1.isAlive());
		System.out.println(T2.isAlive());

   }
}