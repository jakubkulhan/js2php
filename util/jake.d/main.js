var args = @@ JS::fromNative($_SERVER['argv']) @@,
	jakefilePath = PHP.fn("getcwd")() + "/Jakefile";

if (args.length === 1) {
	jake.displayTasks(jakefilePath);

} else {
	jake.runTask.call(global, args[1], args.slice(2));
}
