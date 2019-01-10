// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   ft_is_sort.js                                      :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: pstringe <marvin@42.fr>                    +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2019/01/09 22:05:46 by pstringe          #+#    #+#             //
//   Updated: 2019/01/09 22:20:30 by pstringe         ###   ########.fr       //
//                                                                            //
// ************************************************************************** //
function cmp(a, b) {
	return a.toLowerCase().localeCompare(b.toLowerCase());
}

function ft_is_sort(arr) {
	for (let i = 0; i < arr.length - 1; i++) {
		if (cmp(arr[i], arr[i + 1]) > 0) {
			return(false);
			break;
		}
	}
	return (true);
}

const tab = [ "!/@#;^", "42", "Hello World", "hi", "zZzZzZz" ];
//const tab = "What are we doing now ?"

if (ft_is_sort(tab))
	console.log("The array is sorted");
else
	console.log("The array is not sorted");
