var args = @@ JS::fromNative($_SERVER['argv']) @@,
	jakefilePath = PHP.fn("getcwd")() + "/Jakefile";

if (args.length === 1) {
	displayTasks(jakefilePath);

} else {
	runTask.apply(global, args.slice(1));
}
