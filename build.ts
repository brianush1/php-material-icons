import { $ } from "bun";
import { readFileSync, readdirSync, writeFileSync } from "fs";

await $`rm -rf svelte-material-icons icons`;
await $`git clone --depth=1 git@github.com:ramiroaisen/svelte-material-icons.git`;

const template = readFileSync("template.php", "utf-8");

const files = readdirSync("svelte-material-icons/svelte-material-icons").filter(x => x.endsWith(".svelte"));

await $`mkdir -p icons`;
for (const file of files) {
	const content = readFileSync(`svelte-material-icons/svelte-material-icons/${file}`, "utf-8");
	const path = content.match(/path d="(.*?)" fill/)![1];
	writeFileSync(`icons/${file.replace(/\.svelte$/, ".php").replace(/[A-Z]/g, (val: string) => {
		return "-" + val.toLowerCase();
	}).substring(1)}`, template.replace("PATH_CONTENT", path));
}

await $`rm -rf svelte-material-icons`;
