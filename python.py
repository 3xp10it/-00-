def hex_to_asc(ch):
	return '{:c}'.format(int(float.fromhex(ch)))

for i in range(256):
	s = '%02x' % i
	print "s:",s,"    ",
	print "hex_to_asc(s):",hex_to_asc(s)
	#print "s:%s,hex_to_asc(s):%s" % (s,hex_to_asc(s))