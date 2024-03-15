import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import UpdateDemandeAchatInformationForm from './Partials/UpdateDemandeAchatInformationForm';
export default function Edit({auth,demandeachat}){
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Demande d'achat #{demandeachat.id}</h2>}>
            <Head title={"Demande d'achat #"+demandeachat.id}/>
        
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <UpdateDemandeAchatInformationForm demandeachat={demandeachat} className='max-w-xl'></UpdateDemandeAchatInformationForm>
                    </div>
                </div>
            </div>

        </AuthenticatedLayout>
    )
}