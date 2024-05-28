package pentavocalica;
public class Pentavocalica {
	private String cadena;
	public Pentavocalica (String cadena) {
		this.cadena = cadena;
	}
	
	public String getCadena () {
		return cadena;
	}
	
	public void setCadena (String cadena) {
		this.cadena = cadena;
	}
	
	public boolean esPentavocalica (String c) { 
            int a, e, i, o, u;
            a = e = i = o = u = 0;
            for(int l = 0; l < c.length(); l++){
			if (c.charAt (l)=='a' || c.charAt (l)=='A') { a++; } 
			if (c.charAt (l)=='e' || c.charAt (l)=='E') { e++; } 
			if (c.charAt (l)=='i' || c.charAt (l)=='I') { i++; } 
			if (c.charAt (l)=='o' || c.charAt (l)=='0') { o++; } 
			if (c.charAt (l)=='u' || c.charAt (l)=='U') { u++; }
            }
	if (a >= 1 && e >= 1 && i >= 1 && o >= 1 && u >= 1) {
		return true;
	}
	
	return false;
}
}