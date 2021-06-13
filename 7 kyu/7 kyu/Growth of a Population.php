<?php 

package kata

func NbYear(p0 int, percent float64, aug int, p int) int {
	var res int
  var n1 float64 = float64(p0)
  var n2 float64 = float64(aug)
  var nend float64 = float64(p)
	for n1 < nend {
		n1 = n1 + n1*(percent/100) + n2
		res++
	}
	return res
}


Beta
Junior Flag Football Player Rankings
