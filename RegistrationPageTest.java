package demo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class RegistrationPageTest {

	public static void main(String[] args) throws InterruptedException {
	
		System.setProperty("webdriver.chrome.driver", "/Users/mukhethwabudeli/Downloads/chromedriver");
			
		WebDriver driver=new ChromeDriver();
			

			
			driver.get("https://lamp.ms.wits.ac.za/~s1832667/RegistrationPage.php");
			
			driver.manage().window().maximize();
			
			driver.findElement(By.name("CompanyName")).sendKeys("download selenium");
			
			driver.findElement(By.name("RegistrationNumber")).sendKeys("download selenium");
			
			driver.findElement(By.name("name_one")).sendKeys("download selenium");
			
			driver.findElement(By.name("email_one")).sendKeys("download selenium");

			driver.findElement(By.name("pos_one")).sendKeys("download selenium");
			
			driver.findElement(By.name("tell_one")).sendKeys("download selenium");
			
			driver.findElement(By.name("name_two")).sendKeys("download selenium");
			
			driver.findElement(By.name("email_two")).sendKeys("download selenium");
			
			driver.findElement(By.name("pos_two")).sendKeys("download selenium");
			
			driver.findElement(By.name("tell_two")).sendKeys("download selenium");
			
			driver.findElement(By.name("pwdcm")).sendKeys("download selenium");
			
			driver.findElement(By.name("RefEmail")).sendKeys("download selenium");
			
			Thread.sleep(2000);
			
			driver.findElement(By.name("RegistrationForm")).click();
	}

}
