#**************** EJERCICIO 2) *********************#
Fecha <- function(){
  FECHA_Inicial=as.Date("2015-01-01") #aqui debes recuperar del sitema la fecha actual en fecha inicial
  FECHA_Inicial
  
  m <- 250000000/60 #oviar
  h <- m/60      #oviar
  d <- h/24   # esto sera 1 ya que quieres hallar el dia siguiente
  FECHA_Final <- FECHA_Inicial+d      #fecha final es la fecha inicial mas d=1
  return(as.character(FECHA_Final, format="%A, %d de %B de %Y"))       #luego devolver solo la fecha final 
  
  }
  Fecha()##oviar
  
difftime("2022-12-04", "2015-01-01", units = "secs")  #oviar
