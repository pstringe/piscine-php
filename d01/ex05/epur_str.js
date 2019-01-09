var arg = process.argv[2];
arg = arg.split(/(\s+)/);
arg = arg.filter((value) => {
    return(!(/^\s+$/.test(value)));
});
console.log(arg.join(' '));
