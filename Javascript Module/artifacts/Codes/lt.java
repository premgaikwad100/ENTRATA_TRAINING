import java.awt.*;
import java.awt.event.*;
public class lt extends Frame
{
	public lt()
	{
		List l = new List();
		l.add("item1");
		l.add("item2");
		setLayout(new FlowLayout());
		setSize(400,400);
		setVisible(true);
		Panel p1 = new Panel();
		add(p1);
		p1.add(l);
	}
	public static void main(String rargs[])
	{
		lt l = new lt();
	}
}