import java.awt.*;
import java.awt.event.*;
public class ch extends Frame
{
	public ch()
	{
		Choice ch = new Choice();
		ch.add("item1");
		ch.add("item2");
		setLayout(new FlowLayout());
		setSize(400,400);
		setVisible(true);
		Panel p1 = new Panel();
		add(p1);
		p1.add(ch);
	}
	public static void main(String rargs[])
	{
		ch c = new ch();
	}
}