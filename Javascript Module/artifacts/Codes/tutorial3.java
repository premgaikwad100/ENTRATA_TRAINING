import java.awt.*;
import javax.swing.*;
class tutorial3
{
	tutorial3()
	{
		JFrame jf = new JFrame("student menu bar");
		MenuBar mb = new MenuBar();
		Menu m = new Menu("admission");
		Menu m1 = new Menu("enquiry");
		Menu m2 = new Menu("departments");
		Menu m3 = new Menu("staff");
		Menu m4 = new Menu("notices");
		MenuItem mi = new MenuItem("fy");
		MenuItem mi1 = new MenuItem("sy");
		MenuItem mi2 = new MenuItem("ty");
		MenuItem mi3 = new MenuItem("9808908767");
		MenuItem mi4 = new MenuItem("9089098765");
		MenuItem mi5 = new MenuItem("co");
		MenuItem mi6 = new MenuItem("me");
		
		MenuItem mi7 = new MenuItem("ce");
		MenuItem mi8 = new MenuItem("patil mam");
		MenuItem mi9 = new MenuItem("emekar sir");
		MenuItem mi10 = new MenuItem("Ut date 17-oct");
		mb.add(m);
				mb.add(m1);
						mb.add(m2);
								mb.add(m3);		mb.add(m4);
				m.add(mi);		m.add(mi1);		m.add(mi2);		
						m1.add(mi3);		m1.add(mi4);		
						m2.add(mi5);		m2.add(mi6);			m2.add(mi7);
					m3.add(mi8);
					m3.add(mi9);
					m4.add(mi10);
							
		jf.setMenuBar(mb);
		jf.setVisible(true);
		jf.setSize(500,500);
		
	}
	public static void main(String args[])
	{
		new tutorial3();
	}
}
								
		