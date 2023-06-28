import math
key = "ASDB"

def cipher(msg):
	cipher = ""
	k_indx = 0
	msg_lst = list(msg)
	key_lst = sorted(list(key))
	col = len(key)
	msg_lst = [x for x in msg_lst if x != ' ']
	# range (start , stop , step)
	matrix = [msg_lst[i: i + col] for i in range(0, len(msg_lst), col)]
	
    # add flag if lists not equal
	print(matrix)
	max_len = max(len(lst) for lst in matrix)
	flag = '#'
	for lst in matrix:
		diff = max_len - len(lst)
		if diff > 0:
			lst.extend([flag] * diff)
	print(matrix)
	# read matrix column-wise using key
	for i in range(col):
		curr_idx = key.index(key_lst[k_indx])
		cipher += ''.join([row[curr_idx] for row in matrix])
		cipher += ' '
		k_indx += 1

	return cipher

def decipher(cipher):
	msg_len = float(len(cipher))
	msg_lst = list(cipher)
	key_lst = sorted(list(key))
	temp = cipher.count(' ')
	msg_len = msg_len - temp
	col = len(key)
	row = int(math.ceil(msg_len / col))
	msg_lst = [x for x in msg_lst if x != ' ']
	
    #create matrix
	matrix = [msg_lst[i: i + row] for i in range(0, len(msg_lst), row)]
	
	message = ""
	# read matrix column-wise using key
	for i in range(row):
		k_indx = 0
		for j in range(col):
			curr_idx = key_lst.index(key[k_indx])
			message += (matrix[curr_idx][i])
			k_indx+=1
	return message


	
msg = "HKLMNOPQRSTU"
cipher = cipher(msg)
print("Ciphered Message: {}".format(cipher.replace('#' , ' ')))

decipher = decipher(cipher)
print("DeCiphered Message: {}".format(decipher.replace('#' , ' ')))

