import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Table from '@/Components/Table';






const columns=[
    'numero',
    'date_demande',
    'description',
    'statut'
]
export default function All({ auth, demandeachats}) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Demandes d'achat</h2>}
        >
            <Head title="Demandes d'achat" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <Table items={demandeachats} columns={columns} primary={"ID_demande"} action="demandeachat.edit" ></Table>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}