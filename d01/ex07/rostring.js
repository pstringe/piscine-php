// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   rostring.js                                        :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: pstringe <marvin@42.fr>                    +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2019/01/09 21:42:17 by pstringe          #+#    #+#             //
//   Updated: 2019/01/09 21:53:50 by pstringe         ###   ########.fr       //
//                                                                            //
// ************************************************************************** //

split = function (arg) {
    arg = arg.split(/(\s+)/);
    arg = arg.filter((value) => {
        return(!(/^\s+$/.test(value)));
    });
    return (arg);
};
	
function rostring(arg){
	last = arg.shift();
	arg.push(last);

	console.log(arg.join(' '));
}

if (process.argv[2]){
	arg = split(process.argv[2]);
	rostring(arg);
}
